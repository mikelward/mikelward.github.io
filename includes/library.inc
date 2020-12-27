<?php
$num = 0;
$item = Array();
function startElement ($parser, $name, $attrs)
{
    global $item;
    global $num;
    global $tag;
    global $value;
    global $insmallimage;
    global $inmediumimage;
    global $inlargeimage;

    if ($name == "SMALLIMAGE")
    {
        $insmallimage = true;
    }
    elseif ($name == "MEDIUMIMAGE")
    {
        $inmediumimage = true;
    }
    if ($name == "LARGEIMAGE")
    {
        $inlargeimage = true;
    }
    else
    {
        $tag = $name;
        $value = "";
    }
}

function endElement ($parser, $name)
{
    global $item;
    global $tag;
    global $asin;
    global $value;
    global $insmallimage;
    global $inmediumimage;
    global $inlargeimage;

    if ($name == "ASIN")
    {
        $asin = $value;
    }
    elseif ($name == "SMALLIMAGE")
    {
        $insmallimage = false;
    }
    elseif ($name == "MEDIUMIMAGE")
    {
        $inmediumimage = false;
    }
    elseif ($name == "LARGEIMAGE")
    {
        $inlargeimage = false;
    }
    elseif ($name == "URL")
    {
        if ($insmallimage)
        {
            if (!isset($item[$asin]['smallimage']))
            {
                $item[$asin]['smallimage'] = $value;
            }
        }
        if ($inmediumimage)
        {
            if (!isset($item[$asin]['mediumimage']))
            {
                $item[$asin]['mediumimage'] = $value;
            }
        }
        if ($inlargeimage)
        {
            if (!isset($item[$asin]['largeimage']))
            {
                $item[$asin]['largeimage'] = $value;
            }
        }
    }
    else
    {
    }
}

function characterData ($parser, $data)
{
    global $value;

    $value .= $data;
}

$xml_parser = xml_parser_create ();
xml_set_element_handler ($xml_parser, "startElement", "endElement");
xml_set_character_data_handler ($xml_parser, "characterData");

function get_book_image_url($id, $asin)
{
    $basedir = "/books/";
    $imagedir = "images";
    $file = "$imagedir/$id.jpg";

    if (file_exists($file))
    {
        error_log("Using image $file for $asin");
        return $file;
    }
    else
    {
        $url = get_amazon_item_image_url($asin);
        error_log("Downloading $url");
        $contents = file_get_contents($url);
        if ($contents)
        {
            $handle = fopen($file, "w");
            if ($handle)
            {
                $ret = fwrite($handle, $contents);
                if ($ret)
                {
                    error_log("Saved $url to $file");
                    fclose($file);
                    return $file;
                }
                else
                {
                    error_log("Error writing $file");
                    unlink($file);
                    return false;
                }
            }
            else
            {
                error_log("Cannot open $file");
                return false;
            }
        }
    }

    return false;
}

function get_album_image_url($id, $asin)
{
    $basedir = "/music/";
    $imagedir = "images";
    $file = "$imagedir/$id.jpg";

    if (file_exists($file))
    {
        error_log("Using image $file for $asin");
        return $file;
    }
    else
    {
        $url = get_amazon_item_image_url($asin);
        error_log("Downloading $url");
        $contents = file_get_contents($url);
        if ($contents)
        {
            $handle = fopen($file, "w");
            if ($handle)
            {
                $ret = fwrite($handle, $contents);
                if ($ret)
                {
                    error_log("Saved $url to $file");
                    fclose($file);
                    return $file;
                }
                else
                {
                    error_log("Error writing $file");
                    unlink($file);
                    return false;
                }
            }
            else
            {
                error_log("Cannot open $file");
                return false;
            }
        }
    }

    return false;
}

function get_movie_image_url($id, $asin)
{
    error_log("Getting image for movie $id");
    $basedir = "/movies/";
    $imagedir = "images";
    $file = "$imagedir/$id.jpg";

    if (file_exists($file))
    {
        error_log("Using image $file for $asin");
        return $file;
    }
    else
    {
        $url = get_amazon_item_image_url($asin);
        error_log("Downloading $url");
        $contents = file_get_contents($url);
        if ($contents)
        {
            $handle = fopen($file, "w");
            if ($handle)
            {
                $ret = fwrite($handle, $contents);
                if ($ret)
                {
                    error_log("Saved $url to $file");
                    fclose($file);
                    return $file;
                }
                else
                {
                    error_log("Error writing $file");
                    unlink($file);
                    return false;
                }
            }
            else
            {
                error_log("Cannot open $file");
                return false;
            }
        }
    }

    return false;
}

function get_amazon_item_image_url($asin)
{
    global $item;

    $queryurl = "http://webservices.amazon.com/onca/xml?Service=AWSECommerceService&AWSAccessKeyId=0VCSKJV0SEQZE3W28Y02&AssociateTag=endbracket-20&Operation=ItemLookup&ItemId=$asin&ResponseGroup=Images";

    $resultxml = file_get_contents($queryurl);
    if ($resultxml)
    {
        $xml_parser = xml_parser_create ();
        xml_set_element_handler ($xml_parser, "startElement", "endElement");
        xml_set_character_data_handler ($xml_parser, "characterData");

        if (xml_parse ($xml_parser, $resultxml, true))
        {
            //return $item[0]['smallimage'];
            return $item[$asin]['mediumimage'];
        }
    }

    return false;
}

function get_isbn_item_image_url($isbn)
{
    global $item;

    $queryurl = "http://webservices.amazon.co.uk/onca/xml?Service=AWSECommerceService&AWSAccessKeyId=0VCSKJV0SEQZE3W28Y02&AssociateTag=endbracket-20&Operation=ItemLookup&ItemId=$isbn&ResponseGroup=Images";

    $resultxml = file_get_contents($queryurl);
    if ($resultxml)
    {
        $xml_parser = xml_parser_create ();
        xml_set_element_handler ($xml_parser, "startElement", "endElement");
        xml_set_character_data_handler ($xml_parser, "characterData");

        if (xml_parse ($xml_parser, $resultxml, true))
        {
            //return $item[0]['smallimage'];
            return $item[$isbn]['mediumimage'];
        }
    }

    //

    return false;
}
?>

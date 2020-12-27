<?php
  /**
   * Redirect to the secure version of a page if an insecure version was requested.
   */
  function redirect_ssl ()
  {
    error_log (print_r ($_SERVER, true));
    if (!"$_SERVER[HTTPS]")
    {
      error_log ("Redirecting to secure version of page");
      header("Location: https://" . (($_SERVER['HTTP_HOST'])? $_SERVER['HTTP_HOST']: $_SERVER['SERVER_NAME']) . $_SERVER['REQUEST_URI']);
    }
    else
    {
      error_log ("Current page is secure");
    }
  }

  /**
   * Return the local file system path to the web server root directory.
   */
  function get_document_root ()
  {
    return $_SERVER['DOCUMENT_ROOT'];
  }

  /**
   * Determine a person's age from their birthdate.
   *
   * @param birthdate is a string in yyyymmdd format
   */
  function get_age_from_birthdate ($birthdate)
  {
    if ($birthdate)
    {
      $age = floor((date("Ymd")-$birthdate)/10000);
      return $age;
    }
    else
    {
      return "?";
    }
  }

  /**
   * Look up the date of birth of the person who owns this web site.
   */
  function get_owner_birthdate ()
  {
    $file = get_document_root () . "/site.ini";
    $conf = parse_ini_file ($file, true);
    if ($conf)
    {
      return $conf['owner']['birthdate'];
    }
    else
    {
      return false;
    }
  }

  /**
   * Look up the full name of the person who owns this web site.
   */
  function get_owner_name ()
  {
    $file = get_document_root () . "/site.ini";
    $conf = parse_ini_file ($file, true);
    if ($conf)
    {
      return $conf['owner']['name'];
    }
    else
    {
      return false;
    }
  }

  /**
   * Connect to the appropriate database.
   */
  function database_connect ()
  {
    $file = get_document_root () . "/site.ini";
    $conf = parse_ini_file ($file, true);
    if ($conf)
    {
	  $driver = $conf['database']['driver'];
      $host = $conf['database']['host'];
      $user = $conf['database']['user'];
      $pass = $conf['database']['pass'];

      return mysql_connect($host, $user, $pass);
    }
    else
    {
      return false;
    }
  }

// vi: set sw=2 ts=33:
?>

<?php

/**
 * Simple file-based cache.
 *
 * Currently keeps files for up to one day by encoding the file age in the file name.
 */
class Cache
{
	// XXX get the document root or app base or something
	static $cacheDir = "/home/mward/library/cache";

	/**
	 * Determine the name we're using to store the cached copy.
	 */
	static function getCacheFileName($url)
	{
		if (!empty($url)) {
			$date = date("Ymd");
			$fileSystemURL = preg_replace("/[\/ ]/", "_", $url);	// strip slashes which are unsafe for a file system
																// XXX should this be a hash or something instead?
			$path = Cache::$cacheDir . '/' . $fileSystemURL;
			return $path;
		}
		else {
			throw new Exception("Cannot get cache file name: No URL supplied");
		}
	}

	/**
	 * Download $url unless it's already cached and return the path to the local copy.
	 */
	static function getFileForURL($url)
	{
		$cacheFileName = Cache::getCacheFileName($url);

		if (file_exists($cacheFileName)) {
			return $cacheFileName;
		}
		else {
			$data = "";
			$request = new HttpRequest();
			$request->setUrl($url);
			$request->setMethod(HttpRequest::METH_GET);
			$host = preg_replace("#^.*?://(.*?)/.*#", "$1", $url);
			error_log("Host is $host");
			$headers = array("Host" => $host);
			$request->addHeaders($headers);
			// redirect defaults to 0, consider increasing it
			// no user agent?
			$request->send();
			if ($request->getResponseCode() == 200) {
				$data = $request->getResponseBody();
				$out = fopen($cacheFileName, "wb");
				if ($out) {
					if (!fwrite($out, $data)) {
						unlink($cache);
						throw new Exception("Error writing to $cacheFileName: " . posix_strerror(posix_get_last_error()));
					}
					fclose($out);
				}
				else {
					throw new Exception("Cannot open cache file $cacheFileName");
				}
				return $cacheFileName;
			}
			else {
				throw new Exception("Cannot open url $url: Response code " . $request->getResponseCode());
			}
		}
	}

	/**
	 * Remove $url from the cache to ensure the next request gets a fresh copy.
	 */
	static function clearURL($url)
	{
		$cacheFileName = Cache::getCacheFileName($url);

		if (file_exists($cacheFileName)) {
			if (unlink($cacheFileName)) {
			}
			else {
				throw new Exception("Cannot delete cache of $url");
			}
		}
		else {
			// nothing to do
		}
	}
}

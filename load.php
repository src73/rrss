updated code. 

<pre>
<?php



$sites = array('https://about.bnef.com/rss',
'https://www.sfgate.com/bayarea/feed/bay-area-news-429.php',
'https://www.canarymedia.com/rss',
'https://www.canarymedia.com/rss.rss',
'https://techcrunch.com/category/climate/rss',
'http://berkeleyside.org/rss',
'https://hnrss.org/newest?points=10',
'https://www.economist.com/bagehots-notebook/rss.xml',
'https://www.economist.com/bartleby/rss.xml',
'https://www.economist.com/buttonwoods-notebook/rss.xml',
'https://www.economist.com/charlemagnes-notebook/rss.xml',
'https://www.economist.com/democracy-in-america/rss.xml',
'https://www.economist.com/erasmus/rss.xml',
'https://www.economist.com/free-exchange/rss.xml',
'https://www.economist.com/game-theory/rss.xml',
'https://www.economist.com/gulliver/rss.xml',
'https://www.economist.com/kaffeeklatsch/rss.xml',
'https://www.economist.com/prospero/rss.xml',
'https://www.economist.com/the-economist-explains/rss.xml',
// 'https://www.economist.com/the-world-this-week/rss.xml',
// 'https://www.economist.com/letters/rss.xml',
'https://www.economist.com/leaders/rss.xml',
// 'https://www.economist.com/briefing/rss.xml',
'https://www.economist.com/special-report/rss.xml',
'https://www.economist.com/britain/rss.xml',
'https://www.economist.com/europe/rss.xml',
'https://www.economist.com/united-states/rss.xml',
'https://www.economist.com/the-americas/rss.xml',
'https://www.economist.com/middle-east-and-africa/rss.xml',
'https://www.economist.com/asia/rss.xml',
'https://www.economist.com/china/rss.xml',
'https://www.economist.com/international/rss.xml',
'https://www.economist.com/business/rss.xml',
'https://www.economist.com/finance-and-economics/rss.xml',
'https://www.economist.com/science-and-technology/rss.xml',
'https://www.economist.com/books-and-arts/rss.xml',
// 'https://www.economist.com/obituary/rss.xml',
// 'https://www.economist.com/graphic-detail/rss.xml',
'https://www.economist.com/economic-and-financial-indicators/rss.xml',
'https://ft.com/world?format=rss',
'https://ft.com/?format=rss',
'https://ft.com/global-economy?format=rss',
'https://ft.com/companies?format=rss',
//'https://ft.com/emerging-markets?format=rss',
'https://ft.com/companies/energy?format=rss',
'https://ft.com/companies/industrials?format=rss',
'https://ft.com/markets?format=rss',
'https://ft.com/climate-capital?format=rss',
'https://ft.com/opinion?format=rss',
'https://ft.com/work-careers?format=rss',
'https://sifted.eu/feed/?post_type=article',
// 'http://www.newyorker.com/feed/humor',
'https://www.newyorker.com/feed/posts',
'https://www.newyorker.com/feed/tech',
'https://spectrum.ieee.org/rss',
'https://www.technologyreview.com/feed/',
'https://foreignpolicy.com/rss',
'https://www.latimes.com/environment/rss2.0.xml',
'https://rss.nytimes.com/services/xml/rss/nyt/EnergyEnvironment.xml',
'https://rss.nytimes.com/services/xml/rss/nyt/Climate.xml',
'https://www.climatedesk.org/rss',
'https://www.eenews.net/articles/feed/',
'https://insideclimatenews.org/rss',
'https://rmi.org/feed',
'https://www.renewableenergyworld.com/feed',
'https://cleantechnica.com/rss',
// 'https://www.texasmonthly.com/category/energy/rss', // anti-scraping? 
// 'https://news.google.com/rss/search?q="green+data+dash"+site:bloomberg.com', // https://www.reddit.com/r/rss/comments/u1op2b/does_bloomberg_has_a_rss_feed_for_free/
'https://feeds.bloomberg.com/green/news.rss',
'https://news.google.com/rss/search?q=cleantech', 
'https://news.google.com/rss/search?q=climate+green+energy+site:reuters.com/sustainability',
'https://news.google.com/rss/search?q=when:2d+site:reuters.com/sustainability',
'https://news.google.com/rss/search?q="cnet-zero"+site:cnet.com',
'https://news.google.com/rss/search?q=climate+environment+site:washingtonpost.com',
'https://news.google.com/rss/search?q=climate+environment+site:time.com',
'https://calmatters.org/category/environment/rss',
'https://www.ctvc.co/rss/',
'https://myclimatejourney.substack.com/feed',
'http://www.carboncommentary.com/blog/?format=rss',
'https://www.greenbiz.com/rss.xml',
'https://startupbasecamp.org/rss',
'https://renewablesnow.com/news/news_feed/?region=usa%20&%20canada',
'https://renewablesnow.com/news/news_feed/?topic=technology',
'https://www.timesheraldonline.com/rss',
'https://e360.yale.edu/feed.xml',
'https://www.spiegel.de/international/index.rss',
'https://mainichi.jp/rss/etc/english_latest.rss',
'https://www.utilitydive.com/feeds/news/',
'http://associated-press.s3-website-us-east-1.amazonaws.com/climate-and-environment.xml', // https://github.com/rererecursive/associated-press-rss
'https://feeds.bbci.co.uk/news/topics/cmj34zmwm1zt/rss.xml',
'https://feeds.bbci.co.uk/news/science_and_environment/rss.xml',
'https://www.theguardian.com/us/environment/rss',
'https://agfundernews.com/rss',
'https://www.propublica.org/feeds/propublica/main',
'https://feeds.npr.org/1025/rss.xml', // climate and environment 
'https://www.latitudemedia.com/feed/',
'https://earthlymattersmatter.substack.com/feed',
'https://openrss.org/www.thetimes.com/uk/environment',
'https://www.informal.cc/feed',
'https://washingtonmonthly.com/feed',
'https://www.construction-physics.com/feed',
'https://www.anthropocenemagazine.org/feed/'
);


function dropOldArticles() {
	try {
		   $db = new PDO("sqlite:".__DIR__."/rrss.db");
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}   catch (Exception $e) {
		    echo "Unable to connect";
		    echo $e->getMessage();
		    exit;
		}

		$stmt = $db->prepare("delete from f where ts < datetime('now', '-7 days');");
		$stmt->execute([]);

		$stmt = $db->prepare("vacuum;");
		$stmt->execute([]);
}

function fetch_url_with_curl($url) {
	# this works properly on Oracle Cloud where file_get_contents() doesn't. And hopefully other places. 
	# file_get_contents mostly worked, but did not follow redirects at FT. 
	# chatgpt 

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; PHP RSS Fetcher)");

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        throw new Exception("cURL error: " . curl_error($ch));
    }

    if ($httpCode !== 200) {
        throw new Exception("Failed to fetch RSS feed, HTTP status code: " . $httpCode);
    }

    curl_close($ch);
    return $response;
}

function doOneUrl($bs) {


	$f = fetch_url_with_curl($bs);
	
	$x = simplexml_load_string($f, 'SimpleXMLElement', LIBXML_NOCDATA);

	// note: simplexml_load_string fails by returning false. that's dumb, but simplifies the structure here. 
	if(false === $x) {
		// it failed, try something else
		print("trying again\n");
		
		// https://stackoverflow.com/questions/3805050/xml-parser-error-entity-not-defined
		$x = simplexml_load_string(html_entity_decode($f), 'SimpleXMLElement', LIBXML_NOCDATA);
	}

	if(false === $x) {
		// it failed, try something else
		print("...and again\n");
		
		// https://stackoverflow.com/questions/1575788/php-library-for-parsing-xml-with-a-colons-in-tag-names
		// https://stackoverflow.com/questions/1245902/remove-namespace-from-xml-using-php
		// except replace : with _
		// it got caught up on <media:thumbnail>
		$x = simplexml_load_string(preg_replace('/(<\/|<)([a-zA-Z]+):([a-zA-Z0-9]+[ =>])/', '$1$2_$3', $f), 'SimpleXMLElement', LIBXML_NOCDATA);
		
	}


	// convert to associative arrays, get some nodes 
	// you can get around this by accessing it like:
	// $x -> channel -> item[0]

	$items = json_decode(json_encode($x), TRUE)['channel']['item'];


	try {
	   $db = new PDO("sqlite:".__DIR__."/rrss.db");
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $db->exec("PRAGMA journal_mode=WAL;"); // try to improve read-while-write performance 
	}   catch (Exception $e) {
	    echo "Unable to connect";
	    echo $e->getMessage();
	    exit;
	}

	echo "Connected to the database\n";
	foreach ($items as &$val) {
		
		try {
			// do some crap with dates

			$pubdate = $val['pubDate'];
			if(substr($val['pubDate'],-2) == 'UT') {
				$pubdate = $pubdate . "C"; // huh, concatenate 
			}

			// echo($pubdate);

			$tz = new DateTimeZone('America/Los_Angeles');
			$date = new DateTime($pubdate);
			$date->setTimezone($tz);

			$stmt = $db->prepare("insert or ignore into f select :url, :ts, :txt");
			$stmt->execute(['url' => $val['link'], 'ts' => $date->format('c'), 'txt' => json_encode($val)]);
			// print(json_encode($val));
			// print("\n");
			print("added ". $val['link'] ."\n");
		}
		catch(Exception $e) {
			print($e);
		}
	}

	$db = null; // close db connection; probably happens anyways when function ends. 


}


// for google URL
function extractGooB64($u) {


	///////////////////////////
	// convert the base 64 string
	///////////////////////////
	$raw = base64_decode($u);


	///////////////////////////
	// chop off the first 2 chars, which actually take ~4 code points
	///////////////////////////
	$raw = substr($raw,4);


	///////////////////////////
	// loop through every character of $raw
	// stopping when we hit an invalid URL char
	//
	// also, ignore an invalid character if its the first one..
	// :eye-roll:
	//
	// https://stackoverflow.com/questions/63154404/get-the-first-letter-number-of-string-that-is-not-a-special-character
	///////////////////////////
	$raw_as_arry = str_split($raw);

	$valid_url_chars = "'-._~:/?#[]@!$&'()*+;,%=" . implode("",range('a','z')) . implode("",range('A','Z')) . implode("",range(0,9));

	$out = array();

	$i = 0; 
	$keepGoing = true;

	
	while($keepGoing) {

		// I wanted to do this in the while loop, but sometimes 
		// there was a \u1 char first. 
		if(strpbrk($raw_as_arry[$i], $valid_url_chars) !== false) {
			array_push($out, $raw_as_arry[$i]);
		}
		else if ($i > 5) {
			// random bug - let the first 5 chars go through. 
			$keepGoing = false;
		}
		
		$i++;
	}

	// remove the extra $ at the end of the array 
	if($out[count($out) - 1] === '$') {
		$out[count($out) - 1] = '';
	}

	// glue the string together. 
	return implode("", $out);
}


// a specialized function for Google's RSS feeds. 
function doOneUrl_google($bs) {


	$f = fetch_url_with_curl($bs);


	$x = simplexml_load_string($f, 'SimpleXMLElement', LIBXML_NOCDATA);

	// note: simplexml_load_string fails by returning false. that's dumb, but simplifies the structure here. 
	if(false === $x) {
		// it failed, try something else
		print("trying again\n");
		
		// https://stackoverflow.com/questions/3805050/xml-parser-error-entity-not-defined
		$x = simplexml_load_string(html_entity_decode($f), 'SimpleXMLElement', LIBXML_NOCDATA);
	}

	if(false === $x) {
		// it failed, try something else
		print("...and again\n");
		
		// https://stackoverflow.com/questions/1575788/php-library-for-parsing-xml-with-a-colons-in-tag-names
		// https://stackoverflow.com/questions/1245902/remove-namespace-from-xml-using-php
		// except replace : with _
		// it got caught up on <media:thumbnail>
		$x = simplexml_load_string(preg_replace('/(<\/|<)([a-zA-Z]+):([a-zA-Z0-9]+[ =>])/', '$1$2_$3', $f), 'SimpleXMLElement', LIBXML_NOCDATA);
	}


	// convert to associative arrays, get some nodes 
	// you can get around this by accessing it like:
	// $x -> channel -> item[0]
	$items = json_decode(json_encode($x), TRUE)['channel']['item'];

	try {
	   $db = new PDO("sqlite:".__DIR__."/rrss.db");
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}   catch (Exception $e) {
	    echo "Unable to connect";
	    echo $e->getMessage();
	    exit;
	}

	echo "Connected to the database\n";
	foreach ($items as &$val) {
		
		try {
			// do some crap with dates
			$pubdate = $val['pubDate'];
			if(substr($val['pubDate'],-2) == 'UT') {
				$pubdate = $pubdate . "C"; // huh, concatenate 
			}
			$tz = new DateTimeZone('America/Los_Angeles');
			$date = new DateTime($pubdate);
			$date->setTimezone($tz);

			// overwrite the link, which is annoying
			$theLink = extractGooB64($val['guid']);

			// check that our extracted string has HTTP.. 
			if(strpos($theLink, "http") !== false) {
				$val['link'] = $theLink;
			}
			else {
				$theLink = $val['link'];
			}

			

			// overwrite the description which is truly annoying
			$val['description'] = 'via Google (' . str_replace("+", " ",substr($bs, 37)) . ')';


			// insert into db 
			$stmt = $db->prepare("insert or ignore into f select :url, :ts, :txt");
			$stmt->execute(['url' => $theLink, 'ts' => $date->format('c'), 'txt' => json_encode($val)]);

			// log to stdout 
			echo("\n");
			echo("\n");
			echo("\n");
			echo $val['guid'];
			print_r($val);
		}
		catch(Exception $e) {
			print($e);
		}
	}
}


dropOldArticles();

shuffle($sites);

foreach ($sites as &$site) {
	print("\n");
	print($site);
	print("\n");

	if(strpos($site, "news.google.com/rss")) {
		try {
			doOneUrl_google($site);
		}
		catch(Throwable $e) {
			print($e);
		}
	}
	else {
		try {
			doOneUrl($site);
		}
		catch(Throwable $e) {
			print($e);
		}
	}
	

}

dropOldArticles();

print("finished!!")


?>
</pre>
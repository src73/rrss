## rrss
Functionally, rrss is a private news aggregator you control with a visual design inspired by [Hacker News](https://news.ycombinator.com/). I designed it quickly as a drop-in replacement for Hacker News so that I could doom-scroll on news sources that are more closely aligned to my goals. 

Technically, rrss is a self-hosted RSS reader in PHP and sqlite. 

![](rrss-demo.png)

## Installation and configuration

### 1. Download and configure
One day rrss will have a nice configuration script. Until that day: 

1. Copy `rrss_blank_db.db` to `rrss.db`

2. the RSS feeds you want to scrape are configurable in `load.php` - you should change them! Check that you don't have any syntax errors by visiting `http://my-host.com/load.php`. 


### 2. Host the code
You can host the code anywhere that allows 

I use a free PHP host like (InfinityFree)[https://www.infinityfree.com/]. 

Hosting is very simple - just drag-n-drop the files to your host. 

### 3. Schedule the loading job

rrss comes with a loading script `load.php` which visits the configured RSS feeds, collates the information, and loads it into the sqlite database. You'll want to run this frequently. 

Your host might come with job scheduling built in (in which case use that!), but mine no longer does. Instead I run it every 5 minutes via Cron on one of my computers that's frequently on. 

Here's the crontab entry: 

```
*/5 * * * * curl http://example.com/load.php > /dev/null
```

### 4. Enjoy!
Simply visit http://example.com/  to see your news feed! 

### (optional) 5. Fine-tune
It's easy JS and PHP code that's pretty easy to hack into what you'd like. Here are some ideas: 

* configure sites where you would always like to see an archived version in the `index.html` array `paywalls`
* define patterns you would like to hide (look in `index.php` for code like `if(domain == 'ft.com' && art.title.includes("Live news: ")){out = [];}`. Alternatively, you could add it to `load.php` so it's never loaded). 

## Technical limitations and to-dos
Here are some pieces of technical work that could be completed. I have no current plans to work on it because the code currently works adequately for my purposes. 

- [ ] **Properly escape un-sanitized strings in `convertArticleToHtml()`** - The current JavaScript string-concatenation approach could hijack the page display if an attacker inserted a properly formatted 
- [ ] **Error handling in `load.php`** - `load.php` lacks robust error handling to detect that, say, a data source has failed to load. 
- [ ] **Convert to static-site generator** - I'd love to have the back-end generate a static `json` file which is posted to a static site hosting site (like GitHub Pages). I've found free PHP hosts to be less reliable, so moving the rss-feed-digesting to the PC in my closet and serving to something solid like GitHub Pages would allow greater reliability in ways that matter to me. 
- [ ] **Do not publically serve the sqlite database** - without further configuration of the web server anyone on the internet can download the sqlite database. This is traditionally considered a security vulnerability. However, there is no "private" data in the sqlite database; `rrss.php` exists to turn any information in the db into a JSON file. 

## Ongoing maintenance 
This project is provided as-is and is not actively maintained. I plan to fix bugs / make enhancements as they impact my life. 


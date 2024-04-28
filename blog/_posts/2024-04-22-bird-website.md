---
layout: post
title:  "Project: NL and TW birds"
date:   2024-04-28 23:35:00 +2000
location: "Delft, Netherlands"
---

I wanted a website that shows birds who appear in both the Netherlands and Taiwan, and whether I've seen them ([link to project](https://birds.liliansung.com/)).[^1] I'm happy I had an idea and was able to execute the idea :D

![Screenshot of project website](https://www.liliansung.com/assets/img/2024-bird-project.png)

## The lists
I used the [Lijst van Nederlandse vogelsoorten](https://www.dutchavifauna.nl/page/1208/lijst_van_nederlandse_vogelsoorten) from the Dutch Birding Association, and the [2023年臺灣鳥類名錄](https://www.bird.org.tw/basicpage/87) from the Taiwan Wild Bird Federation to compile a list of birds that appeared in both countries. The data processing was done in Excel using `=IF(ISERROR(MATCH(A1,$C$1:$C$714,0)),"",A1)` to compare columns. This was done with both the English and scientific names, then fixing discrepancies between the two (e.g. English names differed on the apostrophes used, grey vs gray, apostrophes), deferring to the Dutch list.[^2]

In hindsight, I could have used [Avibase's compare regions](https://avibase.bsc-eoc.org/compare_regions.jsp?region=nl&region2=TW&list=clements&method=3) function. Although their list has a few more birds than mine (290 vs 281). Some of the birds on the Avibase list don't appear on the lists I used[^3], some on my list don't appear on the Avibase list.[^4]

I wasn't sure what to do with subspecies. Sometimes Taiwan and the Netherlands had the same subspecies (e.g. Tree pipit - *Anthus trivialis trivialis*), whereas sometimes there was no overlap (e.g. Eurasian whimbrel *Numenius phaeopus* - nl: *N. p. phaeopus, N. p. islandicus* - tw: *N. p. variegatus, N. p. hudsonicus*. Also while we're here, *N. p. hudsonicus* has been split off into its own species and doesn't even belong in this discussion!)


The Excel (which looks similar to this [checklist](https://birds.liliansung.com/asset/nl-tw-birdlist.pdf) version I made) was then converted to JSON using [https://csvjson.com](https://csvjson.com/), so that each bird looked like this:

```
{
    "Dutch": "Grote Pieper",
    "English": "Richard’s Pipit",
    "Chinese": "大花鷚",
    "Scientific": "Anthus richardi",
    "Alternative name": "",
    "Alternative scientific name": "",
    "Notes": ""
}
```

## Flickr API
The JSON was then populated with bird photo URLs from Flickr using its API [search method](https://www.flickr.com/services/api/flickr.photos.search.html). I was fiddling around with different license arguments, but ended up only grabbing photos under [CC BY 2.0](https://creativecommons.org/licenses/by/2.0/deed.en) license.

Not all birds returned a picture, and not all pictures returned were great, so some manual search and selection was done too.

## The JavaScript
I've never used data from JSON to populate a page before. I found [this Medium article](https://medium.com/@akshaykrdas001/how-to-fetch-data-from-local-json-file-and-render-it-to-html-document-with-using-vanilla-javascript-a0191a894f25) useful. Note that Firefox threw an "Uncaught SyntaxError: import assertions are not currently supported" when I used `import` so I `fetch()`ed the JSON instead. 

[^1]: I was inspired by [Melanie Richards](https://melanie-richards.com/) to make little web projects.

[^2]: I don't have strong taxonomy opinions, my decision was to choose a list and stick with it. Avibase mostly agrees with the Taiwan list so I'm not sure if my decision is the "correct" one. Given that taxonomy is unsettled, I feel okay with this decision, for now. [Link to a Vogelberscherming blog post about the little owl](https://www.vogelbescherming.nl/beleefdelente/blog/lezen/athene-noctua-exit). [Link to Nick's Bird Blog, where he reviews (changes in) taxonomy](https://nicksbird.blog/).

[^3]: List of birds in Avibase and not on my list: Cackling goose, Greater flamingo, Ross's gull, Caspian gull, Red-billed tropicbird, White stork, Striated heron, Lesser kestrel, House crow, Mistle thrush, Siberian stonechat, House sparrow.

[^4]: List of birds on my list and not on the Avibase list: Eurasian teal, Common house martin, Black throated thrush.
# Specialfunktion för att skapa en länk som visas i en i-frame

## Hur man använder Region Hallands plugin "region-halland-acf-page-i-frame"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-page-i-frame".


## Användningsområde

Denna plugin skapar en länk som visas i en i-frame


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell via den medföljande filen:
```sh
LICENSE (https://github.com/RegionHalland/region-halland-acf-page-i-frame/blob/master/LICENSE)
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-page-i-frame.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-page-i-frame.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-page-i-frame": "1.0.0"
},
```


## Visa länken i en i-frame via "Blade"

```sh
@php($myLink = get_region_halland_acf_page_i_frame_link())
<iframe width="100%" height="700px;" src="{{$myLink}}"></iframe> 
```


## Versionhistorik

### 1.3.0
- Bifogat fil med licensmodell

### 1.2.0
- Lagt till information om licensmodell

### 1.1.0
- Lagt till view-filen "template-i-frame.blade.php"

### 1.0.0
- Första version
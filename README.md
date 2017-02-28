# University Database

#### _A webpage that simulates a university database, 28th February 2017_

#### By _**Xia Amendolara**_

## Description

This web application simulates an online admin registry for an university. The user can enter students name along with admission date and course information (course name, course number). The user can assign students to courses. 

## Setup/Installation Requirements

1. _Fork and clone this repository from_ [gitHub](https://github.com/xesme/university-registry).
2. Run `composer install --prefer-source --no-interaction` from project root
3. Create a local server in the /web directory within the project folder using the command: `php -S localhost:8000`
4. Open the directory http://localhost:8000/ in any standard web browser.


## Specifications

|Behavior|Input|Output|
|--------|-----|------|
|User can enter a student into the data base with date of admission | "Lisa Frank" "2/28/17"| "Lisa Frank" "2/28/17"|
|User can enter courses with course number | "History", "102" | "History", "102"|
|User can register students to courses | "Lisa Frank": "History 102"| "Lisa Frank": "History 102"|
## Known Bugs

No bugs currently but, this application is unfinished.

## Support and contact details

Please contact XiaEsmeAmen@me.com with questions or concerns.

## Technologies Used

* _HTML_
* _CSS_
* _Bootstrap_
* _PHP_
* _Silex_
* _Twig_
* _Composer_

## License

*MIT license*

Copyright (c) 2017 **Xia Amendolara** All Rights Reserved.

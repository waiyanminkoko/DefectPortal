# Facilities Management Portal
# (Defect Portal)
#### Video Demo:  <https://youtu.be/RGocHVqYLO4>
#### Web Framework: Laravel
#### Description:

### Introduction
My CS50 project is on creating a Facilities Management Portal for a Boarding School (which mine is the Hwa Chong Institution Boarding School, the place where I am currently working in). I have thought of creating such a portal since we don't have an automation system as well as a place to collectively view the Defects, Logistics and Cleaning status when these are all necessary fields when managing a huge Boarding School. For my CS50 Final Project, I have decided to work on creating a Defect Management Portal together with a Logistics List. I am hoping to further develop my portal to include the Cleaning Portal where cleaners can access to view their daily and weekly tasks with admins (staff) being able to easily add in the tasks and check the status of each task as well as an automation scheduling function for daily tasks.


### Plan
When creating this Portal, my plan was to use a simple interface for clarity purposes and quick navigation so that admins and users don't need to be confused on where each function and tab are. This also includes the layout of each menu or table for admins to see where everything is in a single page (Defect Report & Logistics). The portal can only be accessed by the admins while users (Boarders, Guests, & Boarding Mentors staying in the Boarding School) can only access the Defect Form through a QR Code which is placed at different locations across the entire Boarding School. The admins can access the Defect Report Page to check the details of each defect reports and update the status of each Defect (Pending, In Progress, Complete) and use the Logistics Menu to update on the logistic for each type of Defect.


### Execution
To check the boxes I have made for my portal, I have decided to only include a navbar with a collapsible  dropdown Menu with all the pages inside it. For the Defect Forms (Admin and Users), I have created a simple form with a selectable dropdown menu and text boxes to key in the required details. I have only decided to use these types of forms since there are a lot of values to choose from and to make sure the form can remain responsive regardless of the devices it is viewed on. The Defect Report and Logistics pages only have tables to view each Defect and Logistics in details without having to click on them to see them in detail. To make these possible, I have decided to use PHP with the help of the Laravel Framework, with HTML and CSS supporting the frontend while SQLite supporting my backend database storage.


### Folders and Files
In my Project Folder (DefectPortal), there are multiple folders and files that were automatically created by the Laravel Web Framework in order to handle multiple features that are built into the framework. Most of the folders are hidden. It's best to view these folders in a codespace just like VSC Codespace. The folders that I used to create my Facilities Management Portals are: Controllers, routes, Models, database, public and resources. The details of each folder are provided below.

#### Routes
Route: /routes

The routes include php files which manages the actions requested from the frontend html and connect it with the Controllers to run certain functions. The custom routes created to operate my Facilities Management Portal can be found in web.php (/routes/web.php).


#### Controllers
Controller Route: /app/Http/Controllers

The Controllers include controller.php files which manage the flow of each webpages (href, actions) using various functions which are requested from web.php in the routes folder. It is very useful to direct the html pages to the webpages I want without much hassle.

#### Models
Model Route: /app/Models

The Models include .php files which connect the frontend html with the backend sqlite database using classes. It's similar to using Python but with more convenience due to the fact that it allows the use of Eloquent which is a SQL driver which uses pre-written functions to call a SQL script without having to write the entire SQL script. This shortens the code and protect the portal from SQL injection attacks.

#### Database
Database Route: /database

The database folder includes the database.db itself with other folders created automatically by Laravel to facilitate the creation of the database by adding in pre-created tables in its Web Framework to handle the authentication of different users and added security features. These pre-created tables help saved me a lot of time to focus on the main features instead of coding the authentication feature from scratch.

#### CSS & Images
CSS Route: /public/css

Images Route:  /public/static

My custom styles.css is located in the css folder where I use to manage how each and every class in my html is located and how they are viewed. The static folder includes the resources used to view certain images in the tab or in my webpages.


#### Web Pages & Layout
Web Pages Route: /resources/views/pages

Layout Route: /resources/views/layouts

The layout(backbone of my webpage) of my webpages is located in the layouts folder so that I don't need to repetitively type the contents in the headings and body html tags for every webpage I create. The different webpages that I created for my Portal is located in the pages folder and as you can see the Laravel framework uses blade.php instead of .html to make sure the contents inside the webpage can connect to the controllers, routes and the models. The blade.php files act as a normal html file and its just modified to connect to the different functions that Laravel has to offer.

### Experience
It has been a wild ride learning all 6 languages within a week or so and continuing to keep on learning throughout the process of producing my Final Project. I have faced multiple obstacles, bugs and frustration along the way but I have learnt a lot from all the roadblocks I have faced and understood how Web Developers have to learn a lot of new frameworks and languages to keep upgrading their skills and abilities. What I have found out throughout creating this Final Project is that the frontend development (HTML, CSS) is slightly easier than the backend development (PHP, SQL, Frameworks, Javascript) since I can actually see the product of my code in a webpage and know whether I have fixed a bug or not inside the webpage itself. In backend development, when facing bugs, I may not understand what the bug is and how I am supposed to fix it. Sometimes, Stack Overflow and Youtube tutorials don't help fix the bugs due to other bugs that may follow along. I should say that, I could have spent more time trying to properly learn the languages used in the backend web development so that I can actually understand the bugs and at least have an idea of fixing the bugs.


### Conclusion
Regardless of the mistakes, I am glad to have experienced a lot in CS50: Introduction to Computer Science and would like to recommend the course to my fellow peers who are looking forward to exploring more into Computer Science. I am very thankful to learn a lot from such a great lecturer like Mr. David J. Malan and I would like to thank him for conveying what he wants to say with such clarity and knowledge. Just like how Mr. David J. Malan would end off his lectures, I would like to end my experience the same. This was CS50 and see y'all next time!


# Laravel Web Framwork Details
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Blood Bank Management System :drop_of_blood:
[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

### Table of Contents
1. <a href="#Details">Project Details</a>
2. <a href="#DS">Directory Structure</a>
3. <a href="#Clone">Once cloned, follow</a>
4. <a href="#Contribute">How to Contribute</a>
5. <a href="#Acknowledgements">Acknowledgements</a>

---

### <a name="Details">1. Project Details</a>
The prime objective of this project is to create a **smooth functioning blood bank management system**. This system stores information in a MySQL database coupled with a simple user interface providing easy access to health officials when using our blood bank management system. Our database stores details of the users that login, available hospitals for blood donation and request, blood donors, blood requesters and reports of each patient. There is an **admin page** provided as well for easy overlooking of our data. Each website visitor has the provision to learn more about our blood bank system by going over the ‘about page’ and reasons why one should donate blood over at ‘Why donate blood?’ page. The user should first register to the website to donate or request blood as this increases the layer of security thus to avoid false and spam user logins. This authentication method is modelled using a PHP architecture.
<br>
The system is constructed using a **Data Secure, On-Demand, High Performance database like MySQL** coupled with a **Extremely Flexible, Easy Integration and Compatible PHP Laravel backend** is used having a MVC architecture. The Frontend User Interface of the website is developed using **HTML5, CSS3, Javascript and BOOTSTRAP**.

### <a name="DS">2. Directory Structure</a>
(1) [Root](https://github.com/Coding-Collective/Blood-Bank-Management-System)
<br>(2) [App](https://github.com/Coding-Collective/Blood-Bank-Management-System/tree/main/app)
<br>(3) [Bootstrap](https://github.com/Coding-Collective/Blood-Bank-Management-System/tree/main/bootstrap)
<br>(4) [config](https://github.com/Coding-Collective/Blood-Bank-Management-System/tree/main/config)
<br>(5) [database](https://github.com/Coding-Collective/Blood-Bank-Management-System/tree/main/database)
<br>(6) [public](https://github.com/Coding-Collective/Blood-Bank-Management-System/tree/main/public)
<br>(7) [resources](https://github.com/Coding-Collective/Blood-Bank-Management-System/tree/main/resources)
<br>(8) [routes](https://github.com/Coding-Collective/Blood-Bank-Management-System/tree/main/routes)
<br>(9) [storage](https://github.com/Coding-Collective/Blood-Bank-Management-System/tree/main/storage)
<br>(10) [tests](https://github.com/Coding-Collective/Blood-Bank-Management-System/tree/main/tests)
<br><br>
**To learn in detail what each directory is used for refer: [Directory Structure](https://laravel.com/docs/8.x/structure#the-database-directory)

### <a name="Clone">3. Once cloned, follow:</a>
(1) Open the project in any editor and Run ``composer install``
<br>(2) Rename the '.env.example' to '.env'
<br>(3) Run ``php artisan key:generate``
<br>(4) Start your local database using XAMPP/WAMPP/LAMPP
<br>(5) Run ``php artisan migrate``
<br>(5) Go to the '.env' file and add in your database details
<br>(6) Run ``php artisan serve --port="8000"`` to test the project on port 8000

---
### <a name="Contribute">**4. How to Contribute:**</a>

1. Clone repo and create a new branch: `$ https://github.com/Coding-Collective/Blood-Bank-Management-System -b name_for_new_branch`.
2. Make changes and test.
3. Submit Pull Request with comprehensive description of changes.

### <a name="Acknowledgements">**5. Acknowledgements:**</a>

<table>
<td align="center">
	<a href="https://github.com/rebeccadias"><img src="https://avatars1.githubusercontent.com/u/56188657?s=460&u=13edf4034b6bb9d33a17440c600f515a099727f9&v=4"  width="100px;" alt="Rebecca Dias Image"/><br>
	<sub><b>Rebecca Dias</b></sub></a><br/>
	<sub><b>Backend Developer</b></sub><br/>
</td>
<td align="center">
	<a href="https://github.com/chelseadsouza"><img src="https://avatars1.githubusercontent.com/u/56515133?s=460&u=a2d8b15a246701fcd32a186ada876e915dac8bd8&v=4" width="100px;" alt="Chelsea Dsouza Image"/><br>
	<sub><b>Chelsea Dsouza</b></sub></a><br/>
	<sub><b>Backend & Frontend Developer</b></sub><br/>
</td>
<td align="center">
    <br>
	<a href="https://github.com/deliciafernandes"><img src="https://avatars3.githubusercontent.com/u/53268119?s=460&u=a7dfaa6f45777e542b202d707d5a25ac3d9beb64&v=4" width="100px;" alt="Delicia Fernandes Image"/><br>
	<sub><b>Delicia Fernandes</b></sub></a><br/>
	<sub><b>Frontend Developer</b></sub><br/>
</td>
</table>

<p align="center">
<b><a href="https://github.com/Coding-Collective">Keep Developing!</a></b>
</p>


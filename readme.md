# A Meta-Approach to guide Architectural Refactoring from Monolithic Applications to Microservices

> This is the Master Thesis of Qiwen Gu, a student of INFOTECH, University of Stuttgart, Germany.

> A web-based tool for assisting the developers to guide their architectural refactoring process based on specific scenarios.

> Terms: micro-services, monolithic migration, architectural refactoring, web demo.


---

## Table of Contents

- [Getting Started](#Getting-Started)
    - [Prerequisites](#Prerequisites)
- [Installing on Local Machine](#Installing-on-Local-Machine)
    - [Installation STEP1](#Installation-STEP1)
    - [Installation STEP2](#Installation-STEP2)
    - [Installation STEP3](#Installation-STEP3)
    - [Installation STEP4](#Installation-STEP4)
- [Deployment on Microsoft Azure](#Deployment-on-Microsoft-Azure)
    - [Deployment STEP1](#Deployment-STEP1)
    - [Deployment STEP2](#Deployment-STEP2)
    - [Deployment STEP3](#Deployment-STEP3)
    - [Deployment STEP4](#Deployment-STEP4)
    - [Deployment STEP5](#Deployment-STEP5)
- [Running the web-based tool](#Running-the-web-based-tool)
    - [Open the Index Page](#Open-the-Index-Page)
    - [Open the Search Page](#Open-the-Search-Page)
    - [Open the Result Page](#Open-the-Result-Page)
- [Built With](#Built-With)
- [Author](#Author)


---

## Getting Started

The following instructions will enable you to build a local environment for development and running purposes. See deployment for notes on how to deploy the project on a live system.


### Prerequisites

In order to use and rest the web-based tool, the following prerequisites should be fulfilled, and detailed set up processes are illustrated in *"Installing on local machine"* section.

- Windows Operation System
- A web browser
- PHP scripting language for web development
- MySQL Database
- Apache HTTP Server


---

## Installing on Local Machine

In this section, a step by step series of process will show you how to set up a development and running environment to use the web-based tool.

### Installation STEP1

> Download <a href="https://www.apachefriends.org/index.html/" target="_blank">**XAMPP**</a> for Windows, a free and easy to install Apache distribution containing *PHP* and *MySQL*.

After the installer is downloaded from official website, you can run the installer as an administrator. 

In some cases, alert windows may pop up to inform you that an antivirus software is running, or an activated User Account Control (UAC) may restrict some functions of *XAMPP*. It is fine to ignore these alerts and continue the installation process.

In next step, you can select the components to install. In this case, *Apache*, *MySQL*, *PHP* and *phpMyAdmin* are included as major components in order to build a complete running environment.

***Necessary components in XAMPP installation***

![XAMPP1](https://user-images.githubusercontent.com/29103893/89133462-4ca67780-d51c-11ea-8b79-d520ebbf6a29.png)

Then, a installation folder is selected, and it is recommended to use the default folder in system disk to avoid user authorization problems in the future.

***Select installation folder for XAMPP***

![XAMPP2](https://user-images.githubusercontent.com/29103893/89133653-ede1fd80-d51d-11ea-82ec-4e74126cbaa8.png)

Finally, click *"Next"* button until the installation and configuration processes are finished. And the running environment is successfully set up.

### Installation STEP2

> Start *Apache* and *MySQL* module in the *XAMPP Control Panel*.

You can start the installed *XAMPP Control Panel* and you can see many action buttons for different modules. Here, we can start *Apache* and *MySQL* module by clicking *"Start"* button for each module.Then you can see the activated modules and their connecting ports.

***XAMPP Control Panel***

![XAMPP3](https://user-images.githubusercontent.com/29103893/89134659-f1c64d80-d526-11ea-8edc-2a4623d56a34.png)

**If there are errors encountered during the starting process of *Apache*, the possible reasons may be as following:**

1. The service is not yet started.
    - Solution: Run *"Services"* as administrator on Windows, find *Apache* (Here *"Apache2.4"*) and click *"Start"* to start the service.

***Start Apache service***

![Service](https://user-images.githubusercontent.com/29103893/89134839-a319b300-d528-11ea-877e-c59e7d99f111.png)

2. The port is occupied by other applications.
    - Solution: Click *"Config"* button for *Apache* module, select *"Apache (httpd.conf)"* file and open with Notepad. Next, search *"Listen"* in the file, and you can change the port to another free port and avoid conflict.

***Change Apache listening port***

![ApachePort](https://user-images.githubusercontent.com/29103893/89135035-8e3e1f00-d52a-11ea-880b-a9bff41f7ccb.png)

### Installation STEP3

> Import *"migration.sql"* schema and data into *MySQL*.

The *"migration.sql"* is a database which contains a table called *"contribution"*. It includes both schema and data.

The *XAMPP* contains *phpMyAdmin*, which is a free and open source administration tool for *MySQL*. You can click *"Admin"* button for *MySQL* module in *XAMPP Control Panel*, and use it with a web browser.

***Open the phpMyAdmin window***

![phpMyAdminWindow](https://user-images.githubusercontent.com/29103893/90280566-6aa0a000-de6b-11ea-9725-adc7bfa9ace5.png)

In the *phpMyAdmin* page, first a new *"migration"* database should be created by clicking the *"New"* link on the left. Then, you can click the *"Import"* section, and choose the local *"migration.sql"* file to import the data table *"contributions"* into MySQL.

***Create new migration database***

![NewDatabase](https://user-images.githubusercontent.com/29103893/90281540-0aaaf900-de6d-11ea-90ca-666bb59b3240.png)

***Import sql file to MySQL server***

![TableInput](https://user-images.githubusercontent.com/29103893/90281643-37f7a700-de6d-11ea-9ae3-c7d929e62521.png)

Specifically, the database allows a normal user (shown in the red box) to select data from the table. This is the only privilege assigned to the user, which is enough for the application and therefore can prevent data from unintended update. The developer can update, add or delete data using phpMyAdmin administration tool directly with a web browser, having the full privileges for operations.

***User's privilege***

![PrivilegeUser](https://user-images.githubusercontent.com/29103893/90281938-cb30dc80-de6d-11ea-99ff-d0b25ffd8e1a.png)

If you want to add a new user, you can click *"Add user account"* link in *"Privileges"* section. Then you can set user name, host name, password and privileges you want to assign to the new user. The following picture is an example of the existing "user" for this web-based tool.

***Add a new user***

![AddUser](https://user-images.githubusercontent.com/29103893/90285060-6a0c0780-de73-11ea-9e3a-ec12c65b0dcf.png)

***User's setting example***

![userCreation](https://user-images.githubusercontent.com/29103893/90285065-6d06f800-de73-11ea-9ec1-c6e0b11ee751.png)

**Coding capability error may encountered during the import process of *phpMyAdmin*, the possible reasons may be:**

- The sql file is encoded with a different coding format.
    - Solution: Open the sql file with Notepad, and save it as another coding format which is consistent with *phpMyAdmin* setting (Here *"utf8mb4_general_ci"* is used).


### Installation STEP4

> Put the project (repository) folder into *XAMPP* htdocs folder.

In order to make the code files runnable in local environment, the project (repository) folder should be places in *XAMPP* htdocs folder (Here *"C:\xampp\htdocs"*). *XAMPP* treat this folder as local host and its code file is accessible by web browser. Specifically, the *php* code as well as *HTML*, *Javascript* can be executed by web browser and they act as a web application locally, enabling us to test and use the web based tool early and intuitively.


---

## Deployment on Microsoft Azure

In this section, a option to deploy the completed web-based tool on *Microsoft Azure* will be illustrated, so that public users can have access to the tool and utilize the tool from external IP addresses. The steps for deployment refers basically to <a href="https://www.youtube.com/watch?v=RaqHD2s_vTM" target="_blank">**HOWTO - Deploy a PHP Application on Azure**</a> by Mark Reha.



### Deployment STEP1
> Register or log in <a href="https://azure.microsoft.com/en-us/free/search/?&ef_id=Cj0KCQjwxNT8BRD9ARIsAJ8S5xbss_NUxJHK8EUnkeL3LcrYXqK_bsDu1WmdTAUfCWEmSrGS9dyZSu8aAum6EALw_wcB:G:s&OCID=AID2100049_SEM_Cj0KCQjwxNT8BRD9ARIsAJ8S5xbss_NUxJHK8EUnkeL3LcrYXqK_bsDu1WmdTAUfCWEmSrGS9dyZSu8aAum6EALw_wcB:G:s&dclid=CjkKEQjwxNT8BRC0-4WyzuGUi5IBEiQATZzD3E5IQQApxjufn-ZaV9hVVK_WAVsEtvBT2t2vox1HY3vw_wcB" target="_blank">***Microsoft Azure***</a>.

*Microsoft Azure* is a cloud computing service created by Microsoft for building, testing, deploying, and managing applications and services through Microsoft-managed data centers. After log in , you can create a new resource for the web-based tool and online database.


### Deployment STEP2

> Create an App container and corresponding online *MySQL* database.

In the *Microsoft Azure* Home Portal, we can click "Create a resource" in "Azure services". Then, we input "Web App + MySQL" in search bar and create a container that can be configured to support PHP and MYSQL.

***Create new service***
![CreateService](https://user-images.githubusercontent.com/29103893/97111235-048f8f00-16de-11eb-8405-9180d2a253eb.png)

Next, we can set the App name (here I named it "microservicewebbasedtool"), Subscription, Resource group, Service plan, Server location, and other settings to create a new App container. After the "Create" button is clicked, *Microsoft Azure* will start deployment process, which may last several minutes to deploy new resources. 

***New service setting***
![ServicePlan](https://user-images.githubusercontent.com/29103893/97112445-a31eee80-16e4-11eb-813c-93fd1440f206.png)


### Deployment STEP3

> Configure the App and migrate database.

The created App resources are accessible via *Microsoft Azure* Home Portal in "Recent resources" section. If we click the corresponding App service "microservicewebbasedtool", a new App service page will be shown.

***Microsoft Azure Home Portal***
![AzureHome](https://user-images.githubusercontent.com/29103893/97110590-48809500-16da-11eb-8a86-0d132fab63b3.png)

In this App service page, we can see various information such as URL, service status and so on.

***App service page***
![AppPage](https://user-images.githubusercontent.com/29103893/97112980-a8316d00-16e7-11eb-88fc-da5be421cd50.png)

At the lift hand side of the page, we can see a list of options which are used for functionalities such as App configuration, Activity log, Access control and so on. Particularly, in "Settings - Configuration", the PHP version, HTML version, Platform and other applied techniques can be configured straightforwardly.

***App configuration page***
![APPConfig](https://user-images.githubusercontent.com/29103893/97175563-fdc35380-1793-11eb-8e32-c910105508fd.png)


In addition, in "Settings - MySQL In App", we can manage the online database, after turn the database service on, the database sql file can be imported into the online database. If we click "Manage" link on the top of the page, we can go to online *phpMyAdmin* portal. This portal is same as previous local one, and the import process is also same. We can refer to the previous section and complete the database import easily.

***MySQL In App page***
![APPMySQL](https://user-images.githubusercontent.com/29103893/97115498-4ed13a00-16f7-11eb-9270-b7ccd713010c.png)



### Deployment STEP4

> Import the App source code into container.

After database is imported, we can import the web-based tool source code in to the container. By click "Development tools - Advanced Tools - Go", we come to *KUDU* environment. Here, we use the CMD debug console, because it is common and only simple command coded is required. Also, operations can be done graphically in directory system easily.

***KUDU for deployment***
![APPAdvTools](https://user-images.githubusercontent.com/29103893/97115516-5db7ec80-16f7-11eb-982c-3efa64138ac4.png)

In *KUDU* environment, the web page files should be located at the "home\site\wwwroot" directory. There exists default APP code and should be deleted completely. After that, we can create a new App directory called "myapp", and the source code ZIP file can be dragged into the directory. The *KUDU* will automatically unzip and copy the source code files into this directory.

***Code import in KUDU***
![KUDUWWW](https://user-images.githubusercontent.com/29103893/97117203-66fa8680-1702-11eb-9919-313f3bc0d031.png)

### Deployment STEP5

>Configure *MySQL* database configuration and adapt App code.

The code and database, which are developed in local environment, should be adapted so that they can fit the online environment. In this step, we will use the console with command code. First, we start in "home\data\mysql" directory, and the code example is given as following:

```
D:\home\data\mysql>ls
D:\home\data\mysql>type MYSQLCONNSTR_localdb.txt
```

By executing "ls" command, all files within the target directory will be listed, and we use "type"command to dump the content of "MYSQLCONNSTR_localdb.txt", and the information about database connection, such as server name, database name, user name, and password will be printed out in the console. Then, for each source code file which uses methods for database connection, their parameters should be changed according to these information. In our project, the "search.php" and "result.php" should be changed. This can be done in directory system by clicking the edit icon and changing the source code online.

***Online database connection parameter change***
![APPEdit](https://user-images.githubusercontent.com/29103893/97118797-78489080-170c-11eb-9c43-d2a6c9138537.png)

Finally, in the App overview page, the URL is available in the top right corner. We can copy and share this URL to other users, so they can visit this web-based tool by the URL externally. For instance, my public URL is <a href="https://microservicewebbasedtool.azurewebsites.net" target="_blank">**https://microservicewebbasedtool.azurewebsites.net**</a>

![APPOV](https://user-images.githubusercontent.com/29103893/97118939-500d6180-170d-11eb-8e0b-ea3084bc989a.png)

---

## Running the web-based tool

In this section, the introduction about the use of web-based tool is introduced.

The web-based tool enable users to select different properties and search for guidelines to choice refactoring techniques and approaches based on their specific system.


### Open the Index Page

First, open the web browser (e.g. Chrome) and input the public URL
```
https://microservicewebbasedtool.azurewebsites.net
```

or input the following local URL:

```
http://localhost/MasterThesis/index.php
```

As mentioned before, *"localhost"* indicates *"C:\xampp\htdocs"*, and *"MasterThesis"* here is the project (repository) name. The *"index.php"* is the php file containing scripts and html page, which should be run as a web page in the web browser.

***Index page***

![NewIndex1](https://user-images.githubusercontent.com/29103893/97121189-a635d100-171c-11eb-9a6b-bd4fff06a20d.png)

In index page, you can select radio button for each property, and decide whether to include this property or not. you can also exclude or leave it as neutral. This selection is based on your own situation, in detail, what is your desired process strategy, decomposition strategy, technique type, validation type about the approach/ framework; what is your available resources of the monolithic application as input; what is your expected outcome type generated by the approach/ framework; what is your intension and quality requirement for the micro-service migration; what is your migration scenario... "Include" button means you want to have it in the migration approach, and vice versa. Additionally, "Neutral" means that you do not care about this specific parameter and leave it free to the approach/ framework. You can move your cursor onto each section title and wait for a while, then an explain of the terminology will pop out to aid your selection.

After selection, you can click *"Search"* button to perform searching. Additionally, you are also allowed to select nothing and leave all parameters as neutral, then the web-based tool will provide you a whole list of contributions from database. Besides, the "Reset" button in the bottom right corner can clear all previous selections and reset the whole web page.


### Open the Search Page

After the search is conducted, a new search page will be shown. The search page shows the included and excluded properties decided by user, and number of results retrieved from database. The results are listed in *"Recommendation(%)"* order as default, and you can also change the order according to *"ID"*, or *"Year"* , in ascend or descend order, by clicking the sorting buttons.

The *"Score"* indicates the quality of each contribution result and *"Recommendation"* indicates the degree of matching according to user's input. The result list also shows the missing string, where each contribution does not include specific properties chosen by user.

Moreover, for the contributions which are excluded by the user's search, the web-based tool also composes them as an excluded list and shows them after the search result list. So user can see what approaches/ frameworks do not fit his/ her requirement.

***Search page***

![NewSearch1](https://user-images.githubusercontent.com/29103893/97121192-ac2bb200-171c-11eb-8aa6-7e836bbaa4f8.png)


### Open the Result Page

If you click one title in the result list, the web browser will open a new window and jump to the result page. It will show all information about this specific contribution. You can read the migration approach, including *"Process Strategy"*, *"Decomposition Strategy"*, *"Technique Type"*, etc., and you can also click *"Link to website"* to jump to the original source website for further information. This page can provide you detailed knowledge about the migration information within its specific scenario, and provide you guideline whether it is also applicable to your system.

***Result page***

![NewResult](https://user-images.githubusercontent.com/29103893/97121196-b2ba2980-171c-11eb-92e6-1711c8317540.png)


---

## Built With

* [XAMPP Version 7.4.8(PHP7.4.8)](https://www.apachefriends.org/index.html) - The web-based tool local running environment
* [Visual Studio Code Version 1.47.3](https://code.visualstudio.com/) - Source-code editor 
* [Chrome Version 84.0.4147.105](https://www.google.com/chrome/?brand=CHBD&gclid=Cj0KCQjwyJn5BRDrARIsADZ9ykHCKujWcNXmaQzeCPtaS7HZ5ra_rfDjd27cd-XSw8oqtWR3QiDLRdoaAkvoEALw_wcB&gclsrc=aw.ds) - Used to run the web-based tool
* [Microsoft Azure](https://azure.microsoft.com/en-us/free/search/?&ef_id=Cj0KCQjwxNT8BRD9ARIsAJ8S5xZEVIuzBwllKAJJ1WVfW-59JgbVXnuAxOT2QOhM2eC2DVI96s9P6MkaAudSEALw_wcB:G:s&OCID=AID2100049_SEM_Cj0KCQjwxNT8BRD9ARIsAJ8S5xZEVIuzBwllKAJJ1WVfW-59JgbVXnuAxOT2QOhM2eC2DVI96s9P6MkaAudSEALw_wcB:G:s&dclid=CjkKEQjwxNT8BRC0-4WyzuGUi5IBEiQATZzD3NevQwLcq75_UJb286HuLZzv1y6Qjy8ZUfgHHAdh3Ivw_wcB) - Online server for deployment 


---

## Author

* **Qiwen Gu** - *Initial work* - INFOTECH - University of Stuttgart - Germany
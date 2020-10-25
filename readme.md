# A Meta-Approach to guide Architectural Refactoring from Monolithic Applications to Microservices

> This is the Master Thesis of Qiwen Gu, a student of INFOTECH, University of Stuttgart, Germany.

> A web-based tool for assisting the developers to guide their architectural refactoring process based on specific scenarios.

> Terms: micro-services, monolithic migration, architectural refactoring, web demo


---

## Table of Contents

- [Getting Started](#Getting-Started)
    - [Prerequisites](#Prerequisites)
    - [Installing on Local Machine](#Installing-on-Local-Machine)
        - [STEP1](#STEP1)
        - [STEP2](#STEP2)
        - [STEP3](#STEP3)
        - [STEP4](#STEP4)
    - [Deployment on Microsoft Azure](#Deployment-on-Microsoft-Azure)
        - [STEP1](#STEP1)
        - [STEP2](#STEP2)
        - [STEP3](#STEP3)
        - [STEP4](#STEP4)
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


### Installing on Local Machine

In this section, a step by step series of process will show you how to set up a development and running environment to use the web-based tool.

**STEP1**

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

**STEP2**

> Start *Apache* and *MySQL* module in the *XAMPP Control Panel*

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

**STEP3**

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

- The sql file is encoded witha different coding format.
    - Solution: Open the sql file with Notepad, and save it as another coding format which is consistent with *phpMyAdmin* setting (Here *"utf8mb4_general_ci"* is used).


**STEP4**

> Put the project (repository) folder into *XAMPP* htdocs folder

In order to make the code files runnable in local environment, the project (repository) folder should be places in *XAMPP* htdocs folder (Here *"C:\xampp\htdocs"*). *XAMPP* treat this folder as local host and its code file is accessible by web browser. Specifically, the *php* code as well as *HTML*, *Javascript* can be executed by web browser and they act as a web application locally, enabling us to test and use the web based tool early and intuitively.

### Deployment on Microsoft Azure




In this section, a option to deploy the completed web-based tool on **Microsoft Azure** will be illustrated, so that public users can have access to the tool and utilize the tool from external IP addresses.


**STEP1**

> Register or log in <a href="https://azure.microsoft.com/en-us/free/search/?&ef_id=Cj0KCQjwxNT8BRD9ARIsAJ8S5xbss_NUxJHK8EUnkeL3LcrYXqK_bsDu1WmdTAUfCWEmSrGS9dyZSu8aAum6EALw_wcB:G:s&OCID=AID2100049_SEM_Cj0KCQjwxNT8BRD9ARIsAJ8S5xbss_NUxJHK8EUnkeL3LcrYXqK_bsDu1WmdTAUfCWEmSrGS9dyZSu8aAum6EALw_wcB:G:s&dclid=CjkKEQjwxNT8BRC0-4WyzuGUi5IBEiQATZzD3E5IQQApxjufn-ZaV9hVVK_WAVsEtvBT2t2vox1HY3vw_wcB" target="_blank">**Microsoft Azure**</a>,  a cloud computing service created by Microsoft for building, testing, deploying, and managing applications and services through Microsoft-managed data centers.

After log in , you can create a new resource for the web based tool and online database.

***Resource and Service creation***

![AzureHome](https://user-images.githubusercontent.com/29103893/97110590-48809500-16da-11eb-8a86-0d132fab63b3.png)


Then, a installation folder is selected, and it is recommand to use the default folder in system disk to avoid user authorization problems in the future.

***Select installation folder for XAMPP***

![XAMPP2](https://user-images.githubusercontent.com/29103893/89133653-ede1fd80-d51d-11ea-82ec-4e74126cbaa8.png)

Finally, click *"Next"* button until the installation and configuration processes are finished. And the running environment is successfully set up.

**STEP2**

> Start *Apache* and *MySQL* module in the *XAMPP Control Panel*

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

**STEP3**

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

Specificly, the database allows a normal user (shown in the red box) to select data from the table. This is the only privilege assigned to the user, which is enough for the application and therefore can prevent data from unintended update. The developer can update, add or delete data using phpMyAdmin administration tool directly with a web browser, having the full privileges for operations.

***User's privilege***

![PrivilegeUser](https://user-images.githubusercontent.com/29103893/90281938-cb30dc80-de6d-11ea-99ff-d0b25ffd8e1a.png)

If you want to add a new user, you can click *"Add user account"* link in *"Privileges"* section. Then you can set user name, host name, password and privileges you want to assign to the new user. The following picture is an example of the existing "user" for this web-based tool.

***Add a new user***

![AddUser](https://user-images.githubusercontent.com/29103893/90285060-6a0c0780-de73-11ea-9e3a-ec12c65b0dcf.png)

***User's setting example***

![userCreation](https://user-images.githubusercontent.com/29103893/90285065-6d06f800-de73-11ea-9ec1-c6e0b11ee751.png)

**Coding capability error may encountered during the import process of *phpMyAdmin*, the possible reasons may be:**

- The sql file is encoded witha different coding format.
    - Solution: Open the sql file with Notepad, and save it as another coding format which is consistent with *phpMyAdmin* setting (Here *"utf8mb4_general_ci"* is used).


**STEP4**

> Put the project (repository) folder into *XAMPP* htdocs folder

In order to make the code files runnable in local environment, the project (repository) folder should be places in *XAMPP* htdocs folder (Here *"C:\xampp\htdocs"*). *XAMPP* treat this folder as local host and its code file is accessable by web browser. Specificly, the *php* code as well as *HTML*, *Javascript* can be executed by web broswer and they act as a web application locally, enabling us to test and use the web based tool eaily and intuitively.





---

## Running the web-based tool

In this section, the introduction about the use of web-based tool is introduced.

The web-based tool enable users to select different properties and search for guidelines to choice refactoring techniques and approaches based on their specific system.


### Open the Index Page

First, open the web browser (e.g. Chrome) and input the following URL:

```
http://localhost/MasterThesis/index.php
```
As mentioned before, *"localhost"* indicates *"C:\xampp\htdocs"*, and *"MasterThesis"* here is the project (repository) name, while *"index.php"* is the php file containing scripts and html page, which should be run as a web page in the web browser.

***Index page***

![Index](https://user-images.githubusercontent.com/29103893/89137277-e4658f00-d537-11ea-9b33-1b6939a106a1.png)

In index page, you can select radio button for each property, and decide whether to include this property or not. you can also exclude or leave it as neutral. 

After selection, you can click *"Search"* button to perform searching. Additionally, you can read all migration approaches by clicking *"Show All"* button. And you are also allowed to select nothing and search, and the web-based tool will provide you an default search result.


### Open the Search Page

After the search is conducted, the index page will refresh and the search page will be shown. The search page shows the included and excluded properties decided by user, and number of results retrieved from database. The results are listed in *"Recommendation"* order as default, and you can also change the order according to *"ID"*, *"Year"* or *"Score"*, ascend or descend, by clicking the sorting buttons.

The *"Score"* indicates the quality of each contribution result and *"Recommendation"* indicates the degree of matching according to user's input. The result list also shows the missing string, where each contribution does not include specific properties chosen by user.

***Search page***

![Search](https://user-images.githubusercontent.com/29103893/89138502-1c6ed100-d53c-11ea-90f3-692d16ba4028.png)


### Open the Result Page

If you click one title in the result list, the web browser will open a new window and jump to the result page. It will show all information about this specific contribution. You can read the migration approach, including *"Process Strategy"*, *"Decomposition Strategy"*, *"Technique Type"*, etc., and you can also click *"Link to website"* to jump to the original source website for further information. This page can provide you detailed knowledge about the migration information within its specific scenario, and provide you guideline whether it is also applicable to your system.

***Result page***

![Detail](https://user-images.githubusercontent.com/29103893/89139268-74a6d280-d53e-11ea-9176-6d48f975eb1a.png)


---

## Built With

* [XAMPP Version 7.4.8(PHP7.4.8)](https://www.apachefriends.org/index.html) - The web-based tool local running environment
* [Visual Studio Code Version 1.47.3](https://code.visualstudio.com/) - Source-code editor 
* [Chrome Version 84.0.4147.105](https://www.google.com/chrome/?brand=CHBD&gclid=Cj0KCQjwyJn5BRDrARIsADZ9ykHCKujWcNXmaQzeCPtaS7HZ5ra_rfDjd27cd-XSw8oqtWR3QiDLRdoaAkvoEALw_wcB&gclsrc=aw.ds) - Used to run the web-based tool
* [Microsoft Azure](https://azure.microsoft.com/en-us/free/search/?&ef_id=Cj0KCQjwxNT8BRD9ARIsAJ8S5xZEVIuzBwllKAJJ1WVfW-59JgbVXnuAxOT2QOhM2eC2DVI96s9P6MkaAudSEALw_wcB:G:s&OCID=AID2100049_SEM_Cj0KCQjwxNT8BRD9ARIsAJ8S5xZEVIuzBwllKAJJ1WVfW-59JgbVXnuAxOT2QOhM2eC2DVI96s9P6MkaAudSEALw_wcB:G:s&dclid=CjkKEQjwxNT8BRC0-4WyzuGUi5IBEiQATZzD3NevQwLcq75_UJb286HuLZzv1y6Qjy8ZUfgHHAdh3Ivw_wcB) - Online server for deployment 


---

## Author

* **Qiwen Gu** - *Initial work* - INFOTECH - University of Stuttgart - Germany
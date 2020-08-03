# A Meta-Approach to guide Architectural Refactoring from Monolithic Applications to Microservices

> This is the Master Thesis of Qiwen Gu, a student of INFOTECH, University of Stuttgart, Germany.

> A web-based tool for assisting the developers to guide their architectural refactoring process based on specific scenarios.

> Terms: micro-services, monolithic migration, architectural refactoring, web demo


## Getting Started

The following instructions will enable you to build a local environment for development and running purposes. See deployment for notes on how to deploy the project on a live system.


### Prerequisites

In order to use and rest the web-based tool, the following prerequisites should be fulfilled, and detailed set up processes are illustrated in "Installing" section.

- Windows Operation System
- A web browser
- PHP scripting language for web development
- MySQL Database
- Apache HTTP Server


### Installing

In this section, a step by step series of process will show you how to set up a development and running environment to use the web-based tool.

**STEP1**

> Download <a href="https://www.apachefriends.org/index.html/" target="_blank">**XAMPP**</a> for Windows, a free and easy to install Apache distribution containing *PHP* and *MySQL*.

After the installer is downloaded from official website, you can run the installer as an administrator. 

In some cases, alert windows may pop up to inform you that an antivirus software is running, or an activated User Account Control (UAC) may restrict some functions of *XAMPP*. It is fine to ignore these alerts and continue the installation process.

In next step, you can select the components to install. In this case, *Apache*, *MySQL*, *PHP* and *phpMyAdmin* are included as mindesten components in order to build a complete running environment.

***Necessary components in XAMPP installation***

![XAMPP1](https://user-images.githubusercontent.com/29103893/89133462-4ca67780-d51c-11ea-8b79-d520ebbf6a29.png)

Then, a installation folder is selected, and it is recommand to use the default folder in system disk to avoid user authorization problems in the future.

***Select installation folder for XAMPP***

![XAMPP2](https://user-images.githubusercontent.com/29103893/89133653-ede1fd80-d51d-11ea-82ec-4e74126cbaa8.png)

Finally, click "Next" button until the installation and configuration processes are finished. And the running environment is successfully set up.

**STEP2**

> Start *Apache* and *MySQL* module in the *XAMPP Control Panel*

You can start the installed *XAMPP Control Panel* and you can see many action buttons for different modules. Here, we can start *Apache* and *MySQL* module by clicking "Start" button for each module.Then you can see the activated modules and their connecting ports.

***XAMPP Control Panel***

![XAMPP3](https://user-images.githubusercontent.com/29103893/89134659-f1c64d80-d526-11ea-8edc-2a4623d56a34.png)

**If there are errors encountered during the starting process of *Apache*, the possible reasons may be as following:**

1. The service is not yet started.
    - Solution: Run "Services" as administrator on Windows, find *Apache* (Here "Apache2.4") and click "Start" to start the service.

***Start Apache service***

![Service](https://user-images.githubusercontent.com/29103893/89134839-a319b300-d528-11ea-877e-c59e7d99f111.png)

2. The port is occupied by other applications.
    - Solution: Click "Config" button for *Apache* module, select "Apache (httpd.conf)" file and open with Notepad. Next, search "Listen" in the file, and you can change the port to another free port and avoid conflict.

***Change Apache listening port***

![ApachePort](https://user-images.githubusercontent.com/29103893/89135035-8e3e1f00-d52a-11ea-880b-a9bff41f7ccb.png)

**STEP3**

> Import "migration.sql" schema and data into *MySQL*.

The "migration.sql" is a database which contains a table called "contribution". It includes both schema and data.

The *XAMPP* contains *phpMyAdmin*, which is a free and open source administration tool for *MySQL*. You can click "Admin" button for *MySQL* module in *XAMPP Control Panel*, and use it with a web browser.

In the *phpMyAdmin* page, you can click "Import" section, and choose the local sql file to import the data into MySQL.

**Coding capability error may encountered during the import process of *phpMyAdmin*, the possible reasons may be:**

- The sql file is encoded witha different coding format.
    - Solution: Open the sql file with Notepad, and save it as another coding format which is consistent with *phpMyAdmin* setting (Here *"utf8mb4_general_ci"* is used).

***Import sql file to MySQL server***

![phpMyAdm](https://user-images.githubusercontent.com/29103893/89135613-01499480-d52f-11ea-9309-7bef5f9ad57f.png)

**STEP4**

> Put the project (repository) folder into *XAMPP* htdocs folder

In order to make the code files runnable in local environment, the project (repository) folder should be places in *XAMPP* htdocs folder (Here "C:\xampp\htdocs"). *XAMPP* treat this folder as local host and its code file is accessable by web browser. Specificly, the *php* code as well as *HTML*, *Javascript* can be executed by web broswer and they act as a web application locally, enabling us to test and use the web based tool eaily and intuitively.

## Running the web-based tool

In this section, the introduction about the use of web-based tool is introduced.

The web-based tool enable users to select different properties and search for guidlines to choice refactoring techniques and approachs based on their specific system.

### Open the Index Page

First, open the web browser (e.g. Chrome) and input the following URL:

```
http://localhost/MasterThesis/index.php
```
As mentioned before, "localhost" indicates "C:\xampp\htdocs", and "MasterThesis" here is the project (repository) name, while "index.php" is the php file containing scripts and html page, which should be run as a web page in the web browser.

***Index page***

![Index](https://user-images.githubusercontent.com/29103893/89137277-e4658f00-d537-11ea-9b33-1b6939a106a1.png)

In index page, you can select radio button for each property, and decide whether to include this property or not. you can also exclude or leave it as neutral. 

After selection, you can click "Search" button to perform searching. Additionally, you can read all migration approachs by clicking "Show All" button. And you are also allowed to select nothing and search, and the web-based tool will provide you an default search result.

***Search page***

![Index](https://user-images.githubusercontent.com/29103893/89137277-e4658f00-d537-11ea-9b33-1b6939a106a1.png)

In index page, you can select radio button for each property, and decide whether to include this property or not. you can also exclude or leave it as neutral. 

After selection, you can click "Search" button to perform searching. Additionally, you can read all migration approachs by clicking "Show All" button. And you are also allowed to select nothing and search, and the web-based tool will provide you an default search result.

### And coding style tests

Explain what these tests test and why




## Built With

* [XAMPP](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Visual Studio Code](https://maven.apache.org/) - Dependency Management
* [Chrome](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Author

* **Qiwen Gu** - *Initial work* - University of Stuttgart
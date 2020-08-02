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
> Download <a href="https://www.apachefriends.org/index.html/" target="_blank">**XAMPP**</a> for Windows, a free and easy to install Apache distribution containing PHP and MySQL.

After the installer is downloaded from official website, you can run the installer as an administrator. 

In some cases, alert windows may pop up to inform you that an antivirus software is running, or an activated User Account Control (UAC) may restrict some functions of XAMPP. It is fine to ignore these alerts and continue the installation process.

In next step, you can select the components to install. In this case, Apache, MySQL, PHP and phpMyAdmin are included as mindesten components in order to build a complete running environment.

***Necessary components in XAMPP installation***
![XAMPP1](https://user-images.githubusercontent.com/29103893/89133462-4ca67780-d51c-11ea-8b79-d520ebbf6a29.png)

Then, a installation folder is selected, and it is recommand to use the default folder in system disk to avoid user authorization problems in the future.

***Installation folder for XAMPP***
![XAMPP2](https://user-images.githubusercontent.com/29103893/89133653-ede1fd80-d51d-11ea-82ec-4e74126cbaa8.png)

Finally, click "Next" button until the installation and configuration processes are finished. And the running environment is successfully set up.

**STEP2**
> Start Apache and MySQL module in the XAMPP Control Panel

You can start the installed XAMPP Control Panel and you can see many action buttons for different modules. Here, we can start Apache and MySQL module by clicking "Start" button for each module.Then you can see the activated modules and their connecting ports.

***XAMPP Control Panel***
![XAMPP3](https://user-images.githubusercontent.com/29103893/89134659-f1c64d80-d526-11ea-8edc-2a4623d56a34.png)

**If there are errors encountered during the starting process of Apache, the possible reasons may be as following.**

1. The service is not yet started.
    - Solution: Run "Services" as administrator on Windows, find Apache (Here "Apache2.4") and click "Start" to start the service.

***Start Apache service***
![Service](https://user-images.githubusercontent.com/29103893/89134839-a319b300-d528-11ea-877e-c59e7d99f111.png)

2. The port is occupied by other applciations.
    - Solution: Click "Config" button for Apache module, select "Apache (httpd.conf)" file and open with Notepad. Next, search "Listen" in the file, and you can change the port to another free port and avoid conflict.

***Apache listening port changing***
![ApachePort](https://user-images.githubusercontent.com/29103893/89134888-0a376780-d529-11ea-9a3e-fbc6d21c899f.png)


## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Author

* **Qiwen Gu** - *Initial work* - University of Stuttgart
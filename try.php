<html class="ng-scope" ng-app="trackerCapture">
    <head>
        <style type="text/css">
            @charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide
            {display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}
            </style>
        <title>Tracker Capture</title>

        <meta name="description" content="DHIS 2">
        <meta name="keywords" content="DHIS 2">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">              

        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/jquery.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/jquery.plugin.min.js"></script>
        
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.picker.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.plus.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.picker.ext.js"></script>
        
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.coptic.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.ethiopian.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.islamic.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.julian.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.nepali.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/jQuery/calendars/jquery.calendars.thai.min.js"></script>      

        <link type="text/css" rel="stylesheet" href="dhis-web-commons/javascripts/jQuery/ui/css/redmond/jquery-ui.css">
        <link type="text/css" rel="stylesheet" href="dhis-web-commons/javascripts/jQuery/calendars/css/ui-redmond.calendars.picker.css">
        
        <script type="text/javascript" src="dhis-web-commons/select2/select2.min.js"></script>
        <link type="text/css" rel="stylesheet" media="screen" href="dhis-web-commons/select2/select2.css"> 

        <script type="text/javascript" src="dhis-web-commons/bootstrap/js/bootstrap.min.js"></script>     
        <link type="text/css" rel="stylesheet" href="dhis-web-commons/bootstrap/css/bootstrap.min.css">
        
        <script type="text/javascript" src="dhis-web-commons/javascripts/d3/d3.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/nvd3/nv.d3.min.js"></script>
        <link type="text/css" rel="stylesheet" media="screen" href="dhis-web-commons/javascripts/nvd3/nv.d3.css">  

        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/angular.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/angular-resource.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/angular-route.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/angular-cookies.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/angular-animate.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/angular-sanitize.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/ui-bootstrap-tpls-0.10.0-draggable-modal.js"></script>
        

        <script type="text/javascript" src="dhis-web-commons/javascripts/moment/moment-with-langs.min.js"></script>

        <script type="text/javascript" src="dhis-web-commons/javascripts/underscore.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.util.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/commons.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/commons.ajax.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/lists.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/periodType.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/date.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/json2.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/validationRules.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.array.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.select.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.comparator.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.availability.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.trigger.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.sharing.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.validation.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.storage.ss.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.storage.ls.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.storage.idb.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.storage.memory.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.storage.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.contextmenu.js"></script>
        <!--<script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.appcache.js"></script>-->

        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/plugins/angularLocalStorage.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/plugins/angular-translate.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/plugins/angular-translate-loader-static-files.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/plugins/angular-translate-loader-url.min.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/plugins/select2.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/angular/plugins/angularjs-nvd3-directives.min.js"></script>

        <script type="text/javascript" src="scripts/app.js"></script>
        <script type="text/javascript" src="scripts/services.js"></script>
        <script type="text/javascript" src="scripts/filters.js"></script>
        <script type="text/javascript" src="scripts/directives.js"></script>
        <script type="text/javascript" src="scripts/controllers.js"></script>        
        <script type="text/javascript" src="scripts/column-display-controller.js"></script>
        <script type="text/javascript" src="scripts/leftbar-menu-controller.js"></script>
        <script type="text/javascript" src="scripts/report-types-controller.js"></script>        
        <!--<script type="text/javascript" src="scripts/tracker-capture.js"></script>-->
        <script type="text/javascript" src="scripts/ng-csv.js"></script>
        <script type="text/javascript" src="components/dashboard/dashboard-controller.js"></script>
        <script type="text/javascript" src="components/dashboard/dashboard-widgets-controller.js"></script>
        <script type="text/javascript" src="components/registration/registration-controller.js"></script>
        <script type="text/javascript" src="components/enrollment/enrollment-controller.js"></script>
        <script type="text/javascript" src="components/dataentry/dataentry-controller.js"></script>
        <script type="text/javascript" src="components/report/tei-report-controller.js"></script>
        <script type="text/javascript" src="components/report/program-summary-controller.js"></script>
        <script type="text/javascript" src="components/report/program-statistics-controller.js"></script>
        <script type="text/javascript" src="components/report/overdue-events-controller.js"></script>
        <script type="text/javascript" src="components/report/upcoming-events-controller.js"></script>
        <script type="text/javascript" src="components/selected/selected-controller.js"></script>
        <script type="text/javascript" src="components/relationship/relationship-controller.js"></script>        
        <script type="text/javascript" src="components/profile/profile-controller.js"></script>        
        <script type="text/javascript" src="components/notes/notes-controller.js"></script>

        <!-- Menu scripts -->
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.translate.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.menu.js"></script>
        <script type="text/javascript" src="dhis-web-commons/javascripts/dhis2/dhis2.menu.ui.js"></script>


        <link type="text/css" rel="stylesheet" href="dhis-web-commons/font-awesome/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" media="screen" href="dhis-web-commons/css/light_blue/light_blue.css">
        <link type="text/css" rel="stylesheet" media="screen" href="dhis-web-commons/css/widgets.css">
        <link type="text/css" rel="stylesheet" media="screen" href="dhis-web-commons/css/menu.css">

        <link type="text/css" rel="stylesheet" href="styles/style.css">
        <link type="text/css" rel="stylesheet" media="screen" href="styles/screen.css">
        <link type="text/css" rel="stylesheet" media="print" href="styles/print.css">        

        <script type="text/javascript" src="main.js"></script>


        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" id="theme" href="template/css/theme-light.css"/>
        <link href="Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link href="Bootstrap/dist/css/jquery-ui.min.css" rel="stylesheet">
        <link href="pagecss/page.css" rel="stylesheet">
        <!-- angular.min.js -->
        <script type="text/javascript" src="/js/angular.min.js"></script> 

    <link href="dhis-web-commons/css/light_blue/light_blue.css" type="text/css" rel="stylesheet" media="screen,print"></head>
    <body>
        <div class="header-bar ng-isolate-scope" id="header">
            <a href="dhis-web-dashboard-integration/index.action" ng-href="dhis-web-dashboard-integration/index.action" title="Joint Partnership Results Portal (JPRP)" class="title-link">
                <img src="dhis-web-commons/css/light_blue/logo_banner.png" class="header-logo" ng-src="dhis-web-commons/css/light_blue/logo_banner.png" id="headerBanner">
                    <span class="header-text ng-binding" ng-bind="headerBar.title" id="headerText">Joint Partnership Results Portal (JPRP)</span>
            </a>
            <div id="headerMessage" class="bold"></div>
            <div d2-menu="" id="dhisDropDownMenu">
                <ul id="menuLinkArea">
                    <li id="profileButton">
                        <a id="profileLink" class="menu-link drop-down-menu-link">
                            <i class="fa fa-user"></i>Profile</a>
                            <div data-display-clicked="false" style="display: none;" class="app-menu-dropdown-wrap">
                                <div class="app-menu-dropdown"><div class="caret-up-border"></div>
                                <div class="caret-up-background"></div>
                                    <ul class="menuDropDownBox">
                                        <li data-id="settings" data-app-name="Settings" data-app-action="dhis-web-commons-about/userSettings.action">
                                            <a href="dhis-web-commons-about/userSettings.action" class="app-menu-item">
                                                <img src="icons/usersettings.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Settings</span><div class="app-menu-item-description"><span class="bold">Settings</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="profile" data-app-name="Profile" data-app-action="dhis-web-commons-about/showUpdateUserProfileForm.action"><a href="dhis-web-commons-about/showUpdateUserProfileForm.action" class="app-menu-item"><img src="icons/function-profile.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Profile</span><div class="app-menu-item-description"><span class="bold">Profile</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="account" data-app-name="Account" data-app-action="dhis-web-commons-about/showUpdateUserAccountForm.action"><a href="dhis-web-commons-about/showUpdateUserAccountForm.action" class="app-menu-item"><img src="icons/function-account.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Account</span><div class="app-menu-item-description"><span class="bold">Account</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="help" data-app-name="Help" data-app-action="dhis-web-commons-about/help.action"><a href="dhis-web-commons-about/help.action" class="app-menu-item"><img src="icons/function-account.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Help</span><div class="app-menu-item-description"><span class="bold">Help</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="log_out" data-app-name="Log out" data-app-action="dhis-web-commons-security/logout.action"><a href="dhis-web-commons-security/logout.action" class="app-menu-item"><img src="icons/function-log-out.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Log out</span><div class="app-menu-item-description"><span class="bold">Log out</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="about_dhis2" data-app-name="About DHIS 2" data-app-action="dhis-web-commons-about/about.action"><a href="dhis-web-commons-about/about.action" class="app-menu-item"><img src="icons/function-about-dhis2.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>About DHIS 2</span><div class="app-menu-item-description"><span class="bold">About DHIS 2</span><i class="fa fa-arrows"></i><p></p></div></a></li></ul><div class="menu-drop-down-buttons"></div></div></div></li><li id="applicationsButton"><a id="applicationsLink" class="menu-link drop-down-menu-link"><i class="fa fa-th"></i>Apps</a><div data-display-clicked="false" style="display: none;" class="app-menu-dropdown-wrap"><div class="app-menu-dropdown"><div class="caret-up-border"></div><div class="caret-up-background"></div><div class="menu-drop-down-wrap"><div class="menu-drop-down-scroll"><div class="apps-search-wrap"><input class="apps-search" placeholder="Search apps" type="text"><i class="apps-search-clear fa fa-times-circle"></i></div><ul class="menuDropDownBox"><li data-id="dhis-web-dashboard-integration" data-app-name="Dashboard" data-app-action="dhis-web-dashboard-integration/index.action"><a href="dhis-web-dashboard-integration/index.action" class="app-menu-item"><img src="icons/dhis-web-dashboard-integration.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Dashboard</span><div class="app-menu-item-description"><span class="bold">Dashboard</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-pivot" data-app-name="Pivot Table" data-app-action="dhis-web-pivot/index.action"><a href="dhis-web-pivot/index.action" class="app-menu-item"><img src="icons/dhis-web-pivot.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Pivot Table</span><div class="app-menu-item-description"><span class="bold">Pivot Table</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-visualizer" data-app-name="Data Visualizer" data-app-action="dhis-web-visualizer/index.action"><a href="dhis-web-visualizer/index.action" class="app-menu-item"><img src="icons/dhis-web-visualizer.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Data Visualizer</span><div class="app-menu-item-description"><span class="bold">Data Visualizer</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-mapping" data-app-name="GIS" data-app-action="dhis-web-mapping/index.action"><a href="dhis-web-mapping/index.action" class="app-menu-item"><img src="icons/dhis-web-mapping.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>GIS</span><div class="app-menu-item-description"><span class="bold">GIS</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-event-reports" data-app-name="Event Reports" data-app-action="dhis-web-event-reports/index.action"><a href="dhis-web-event-reports/index.action" class="app-menu-item"><img src="icons/dhis-web-event-reports.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Event Reports</span><div class="app-menu-item-description"><span class="bold">Event Reports</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-event-visualizer" data-app-name="Event Visualizer" data-app-action="dhis-web-event-visualizer/index.action"><a href="dhis-web-event-visualizer/index.action" class="app-menu-item"><img src="icons/dhis-web-event-visualizer.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Event Visualizer</span><div class="app-menu-item-description"><span class="bold">Event Visualizer</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-dataentry" data-app-name="Data Entry" data-app-action="dhis-web-dataentry/index.action"><a href="dhis-web-dataentry/index.action" class="app-menu-item"><img src="icons/dhis-web-dataentry.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Data Entry</span><div class="app-menu-item-description"><span class="bold">Data Entry</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-event-capture" data-app-name="Event Capture" data-app-action="dhis-web-event-capture/index.action"><a href="dhis-web-event-capture/index.action" class="app-menu-item"><img src="icons/dhis-web-event-capture.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Event Capture</span><div class="app-menu-item-description"><span class="bold">Event Capture</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-tracker-capture" data-app-name="Tracker Capture" data-app-action="dhis-web-tracker-capture/index.action"><a href="dhis-web-tracker-capture/index.action" class="app-menu-item"><img src="icons/dhis-web-tracker-capture.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Tracker Capture</span><div class="app-menu-item-description"><span class="bold">Tracker Capture</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-maintenance-appmanager" data-app-name="App Management" data-app-action="dhis-web-maintenance-appmanager/index.action"><a href="dhis-web-maintenance-appmanager/index.action" class="app-menu-item"><img src="icons/dhis-web-maintenance-appmanager.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>App Management</span><div class="app-menu-item-description"><span class="bold">App Management</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-maintenance-dataadmin" data-app-name="Data Administration" data-app-action="dhis-web-maintenance-dataadmin/index.action"><a href="dhis-web-maintenance-dataadmin/index.action" class="app-menu-item"><img src="icons/dhis-web-maintenance-dataadmin.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Data Administration</span><div class="app-menu-item-description"><span class="bold">Data Administration</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-maintenance-datadictionary" data-app-name="Data Elements / Indicators" data-app-action="dhis-web-maintenance-datadictionary/index.action"><a href="dhis-web-maintenance-datadictionary/index.action" class="app-menu-item"><img src="icons/dhis-web-maintenance-datadictionary.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Data Elements / Indicators</span><div class="app-menu-item-description"><span class="bold">Data Elements / Indicators</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-maintenance-dataset" data-app-name="Data Sets" data-app-action="dhis-web-maintenance-dataset/index.action"><a href="dhis-web-maintenance-dataset/index.action" class="app-menu-item"><img src="icons/dhis-web-maintenance-dataset.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Data Sets</span><div class="app-menu-item-description"><span class="bold">Data Sets</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-importexport" data-app-name="Import-Export" data-app-action="dhis-web-importexport/index.action"><a href="dhis-web-importexport/index.action" class="app-menu-item"><img src="icons/dhis-web-importexport.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Import-Export</span><div class="app-menu-item-description"><span class="bold">Import-Export</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-caseentry" data-app-name="Individual Records" data-app-action="dhis-web-caseentry/index.action"><a href="dhis-web-caseentry/index.action" class="app-menu-item"><img src="icons/dhis-web-caseentry.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Individual Records</span><div class="app-menu-item-description"><span class="bold">Individual Records</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-maintenance-mobile" data-app-name="Mobile Configuration" data-app-action="dhis-web-maintenance-mobile/index.action"><a href="dhis-web-maintenance-mobile/index.action" class="app-menu-item"><img src="icons/dhis-web-maintenance-mobile.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Mobile Configuration</span><div class="app-menu-item-description"><span class="bold">Mobile Configuration</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-maintenance-organisationunit" data-app-name="Organisation Units" data-app-action="dhis-web-maintenance-organisationunit/index.action"><a href="dhis-web-maintenance-organisationunit/index.action" class="app-menu-item"><img src="icons/dhis-web-maintenance-organisationunit.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Organisation Units</span><div class="app-menu-item-description"><span class="bold">Organisation Units</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-maintenance-program" data-app-name="Programs / Attributes" data-app-action="dhis-web-maintenance-program/index.action"><a href="dhis-web-maintenance-program/index.action" class="app-menu-item"><img src="icons/dhis-web-maintenance-program.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Programs / Attributes</span><div class="app-menu-item-description"><span class="bold">Programs / Attributes</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-maintenance-settings" data-app-name="Settings" data-app-action="dhis-web-maintenance-settings/index.action"><a href="dhis-web-maintenance-settings/index.action" class="app-menu-item"><img src="icons/dhis-web-maintenance-settings.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Settings</span><div class="app-menu-item-description"><span class="bold">Settings</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-maintenance-user" data-app-name="Users" data-app-action="dhis-web-maintenance-user/index.action"><a href="dhis-web-maintenance-user/index.action" class="app-menu-item"><img src="icons/dhis-web-maintenance-user.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Users</span><div class="app-menu-item-description"><span class="bold">Users</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-validationrule" data-app-name="Data Quality" data-app-action="dhis-web-validationrule/index.action"><a href="dhis-web-validationrule/index.action" class="app-menu-item"><img src="icons/dhis-web-validationrule.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Data Quality</span><div class="app-menu-item-description"><span class="bold">Data Quality</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-light" data-app-name="Mobile (Light)" data-app-action="light/index.action"><a href="light/index.action" class="app-menu-item"><img src="icons/dhis-web-light.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Mobile (Light)</span><div class="app-menu-item-description"><span class="bold">Mobile (Light)</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-mobile" data-app-name="Mobile (Smartphone)" data-app-action="mobile/index.action"><a href="mobile/index.action" class="app-menu-item"><img src="icons/dhis-web-mobile.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Mobile (Smartphone)</span><div class="app-menu-item-description"><span class="bold">Mobile (Smartphone)</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-reporting" data-app-name="Reports" data-app-action="dhis-web-reporting/index.action"><a href="dhis-web-reporting/index.action" class="app-menu-item"><img src="icons/dhis-web-reporting.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>Reports</span><div class="app-menu-item-description"><span class="bold">Reports</span><i class="fa fa-arrows"></i><p></p></div></a></li><li data-id="dhis-web-sms" data-app-name="SMS" data-app-action="sms/index.action"><a href="sms/index.action" class="app-menu-item"><img src="icons/dhis-web-sms.png" onerror="javascript: this.onerror=null; this.src = 'icons/program.png';"><span>SMS</span><div class="app-menu-item-description"><span class="bold">SMS</span><i class="fa fa-arrows"></i><p></p></div></a></li></ul></div></div><div class="menu-drop-down-buttons"><div class="apps-menu-bottom-button apps-menu-more"><a href="dhis-web-commons-about/modules.action">More apps</a></div><div class="apps-menu-bottom-button apps-scroll apps-scroll-up"><a class="fa fa-caret-up" href="#"></a></div><div class="apps-menu-bottom-button apps-scroll apps-scroll-down"><a class="fa fa-caret-down" href="#"></a></div></div></div></div></li></ul></div></div>

        <!-- ngView:  --><div class="container-1 ng-scope" data-ng-view="">


<div class="ng-scope" id="leftBar">
   
    <div class="left-bar-menu ng-scope" ng-controller="LeftBarMenuController">
        <ul class="nav nav-pills nav-stacked">
            <li><a class="ng-binding" href="" ng-click="showHome()">Registration and Data Entry</a></li>
            <li><a class="ng-binding" href="" ng-click="showReportTypes()">Reports</a></li>
        </ul>
    </div>        
    
    <d2-ou-search><div style="margin-top:20px">
                    <img id="searchIcon" src="images/search.png" style="cursor: pointer" title="locate_organisation_unit_by_name">
                    <span id="searchSpan" style="width:100%;display:none;">
                        <span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span><input autocomplete="off" class="ui-autocomplete-input" id="searchField" name="key" type="text">
                        <input value="Find" onclick="selection.findByName()" type="button">
                    </span>
                  </div></d2-ou-search>
    
    <div style="cursor: auto;" id="orgUnitTree">
        
    <ul><li level="1" id="orgUnitHfVjCurKxh2"> <span class="toggle"><img alt="[-]" src="images/expand.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;HfVjCurKxh2&quot; )">Kenya</a><ul style="display: block;"><li level="2" id="orgUnitvvOK1BxTbet"> <span class="toggle"><img alt="[-]" src="images/expand.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;vvOK1BxTbet&quot; )">Baringo County</a><ul style="display: block;"><li level="3" id="orgUnitk7Rj54u6dMx"> <span class="toggle"><img alt="[-]" src="images/expand.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;k7Rj54u6dMx&quot; )">Baringo Central</a><ul style="display: block;"><li level="4" id="orgUnitJs2jIKhWf6P"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" class="selected" href="javascript:void selection.select( &quot;Js2jIKhWf6P&quot; )">AIC Ebenezer</a></li><li level="4" id="orgUnitAwVQ3uJftlj"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;AwVQ3uJftlj&quot; )">Barnet Memorial Hospital</a></li><li level="4" id="orgUnitpTlrkLDOyAx"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;pTlrkLDOyAx&quot; )">Bekibon Dispensary</a></li><li level="4" id="orgUnitDMF5wWYxVHg"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;DMF5wWYxVHg&quot; )">Borrowonin Dispensary</a></li><li level="4" id="orgUnitYh9TiSUTbrT"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Yh9TiSUTbrT&quot; )">Cheplambus Dispensary</a></li><li level="4" id="orgUnitZkbTg8ryBSo"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;ZkbTg8ryBSo&quot; )">Chesongo Dispensary</a></li><li level="4" id="orgUnitNcCkDlIqJuM"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;NcCkDlIqJuM&quot; )">Kabarnet District Hospital</a></li><li level="4" id="orgUnitWTCwVNxBCva"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;WTCwVNxBCva&quot; )">Kabarnet Faith Clinic</a></li><li level="4" id="orgUnitoW3SkSEMcvL"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;oW3SkSEMcvL&quot; )">Kabarnet High School Dispensary</a></li><li level="4" id="orgUnitnbIgCElzcE4"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;nbIgCElzcE4&quot; )">Kabarnet Womens' Clinic</a></li><li level="4" id="orgUnitFQn9uxMgroc"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;FQn9uxMgroc&quot; )">Kapkelelwa Dispensary</a></li><li level="4" id="orgUnitHAqSsMMvliD"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;HAqSsMMvliD&quot; )">Kapkole Dispensary</a></li><li level="4" id="orgUnitagoZZYNNVZG"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;agoZZYNNVZG&quot; )">Kapkomoi Dispensary</a></li><li level="4" id="orgUnitgeSMiYmY8Go"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;geSMiYmY8Go&quot; )">Kapkuei Dispensary</a></li><li level="4" id="orgUnitEyxTBFv9eYO"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;EyxTBFv9eYO&quot; )">Kapkures Dispensary (Baringo)</a></li><li level="4" id="orgUnitJiUDQUJPI8Z"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;JiUDQUJPI8Z&quot; )">Kaplel Dispensary</a></li><li level="4" id="orgUnitgB1xXLsxDuE"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;gB1xXLsxDuE&quot; )">Kaptimbor Dispensary</a></li><li level="4" id="orgUnitmXka8EGlJtk"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;mXka8EGlJtk&quot; )">Kaptorokwa Dispensary</a></li><li level="4" id="orgUnituFkkpCAauQz"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;uFkkpCAauQz&quot; )">Kasitet Dispensary</a></li><li level="4" id="orgUnitHMVL4meC7C6"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;HMVL4meC7C6&quot; )">Kibingor Dispensary</a></li><li level="4" id="orgUnitBZ7HdJQhFP9"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;BZ7HdJQhFP9&quot; )">Kiboino Dispensary</a></li><li level="4" id="orgUnitTg6EMD8Y2zU"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Tg6EMD8Y2zU&quot; )">Kipsacho Dispensary</a></li><li level="4" id="orgUnitbiHq0Ii9Gyb"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;biHq0Ii9Gyb&quot; )">Kiptagich Health Centre</a></li><li level="4" id="orgUnitNLLNvgHzXhF"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;NLLNvgHzXhF&quot; )">Kisok Dispensary</a></li><li level="4" id="orgUnityxgRMvuqy4F"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;yxgRMvuqy4F&quot; )">Kisonei Dispensary</a></li><li level="4" id="orgUnitRfOAhyOQqn4"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;RfOAhyOQqn4&quot; )">Kituro Health Centre</a></li><li level="4" id="orgUnitKzEBldPaRn1"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;KzEBldPaRn1&quot; )">Mogorwa Health Centre</a></li><li level="4" id="orgUnitDjViaRhv9Vf"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;DjViaRhv9Vf&quot; )">Moi Teachers College Dispensary</a></li><li level="4" id="orgUnitcYdtfbJ0nX0"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;cYdtfbJ0nX0&quot; )">Mwafrika Institute of Development</a></li><li level="4" id="orgUnitM6YiQfV3Ju7"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;M6YiQfV3Ju7&quot; )">Ngetmoi Dispensary</a></li><li level="4" id="orgUnitjZ0ng8cvb2E"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;jZ0ng8cvb2E&quot; )">Ochii Dispensary</a></li><li level="4" id="orgUnitn54rVzDM3dR"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;n54rVzDM3dR&quot; )">Riwo Dispensary</a></li><li level="4" id="orgUnitM6ggSgOBSCW"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;M6ggSgOBSCW&quot; )">Sacho School Dispensary</a></li><li level="4" id="orgUnitPCGq29ItOC1"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;PCGq29ItOC1&quot; )">Salawa Catholic Mission Dispensary Phc</a></li><li level="4" id="orgUnitaA66k9wpWlD"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;aA66k9wpWlD&quot; )">Salawa Health Centre</a></li><li level="4" id="orgUnito0YDpXsWuEs"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;o0YDpXsWuEs&quot; )">Seretunin Health Centre</a></li><li level="4" id="orgUnitM74KfX3iuTM"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;M74KfX3iuTM&quot; )">Sogon Dispensary</a></li><li level="4" id="orgUniteOFojFTqNLW"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;eOFojFTqNLW&quot; )">Sorok Dispensary</a></li><li level="4" id="orgUnitzxiSHy4syb0"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;zxiSHy4syb0&quot; )">Talai Dispensary</a></li><li level="4" id="orgUnitIuiVUrxWbl2"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;IuiVUrxWbl2&quot; )">Tebei Dispensary</a></li><li level="4" id="orgUnitOfg6EXpIiv1"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Ofg6EXpIiv1&quot; )">Tenges Health Centre</a></li><li level="4" id="orgUnitTlHOb5LRgr4"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;TlHOb5LRgr4&quot; )">Timboiywo Dispensary</a></li><li level="4" id="orgUnitLNykC1tXLc7"> <span class="toggle"><img src="images/transparent.gif" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;LNykC1tXLc7&quot; )">Tionybei Medical Clinic</a></li></ul></li><li level="3" id="orgUnitbqtTmWcikTN"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;bqtTmWcikTN&quot; )">Baringo North</a></li><li level="3" id="orgUnitMk4bMOSMRTB"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Mk4bMOSMRTB&quot; )">East Pokot</a></li><li level="3" id="orgUnitYl9UDBnDvvW"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Yl9UDBnDvvW&quot; )">Koibatek</a></li><li level="3" id="orgUnitdSLnPmNlm8Q"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;dSLnPmNlm8Q&quot; )">Marigat</a></li><li level="3" id="orgUnitk5sxmlXAtIg"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;k5sxmlXAtIg&quot; )">Mogotio</a></li></ul></li><li level="2" id="orgUnitHMNARUV2CW4"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;HMNARUV2CW4&quot; )">Bomet County</a></li><li level="2" id="orgUnitKGHhQ5GLd4k"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;KGHhQ5GLd4k&quot; )">Bungoma County</a></li><li level="2" id="orgUnitTvf1zgVZ0K4"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Tvf1zgVZ0K4&quot; )">Busia County</a></li><li level="2" id="orgUnitMqnLxQBigG0"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;MqnLxQBigG0&quot; )">Elgeyo-Marakwet County</a></li><li level="2" id="orgUnitPFu8alU2KWG"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;PFu8alU2KWG&quot; )">Embu County</a></li><li level="2" id="orgUnituyOrcHZBpW0"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;uyOrcHZBpW0&quot; )">Garissa County</a></li><li level="2" id="orgUnitnK0A12Q7MvS"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;nK0A12Q7MvS&quot; )">Homa Bay County</a></li><li level="2" id="orgUnitbzOfj0iwfDH"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;bzOfj0iwfDH&quot; )">Isiolo County</a></li><li level="2" id="orgUnitHsk1YV8kHkT"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Hsk1YV8kHkT&quot; )">Kajiado County</a></li><li level="2" id="orgUnitBjC1xL40gHo"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;BjC1xL40gHo&quot; )">Kakamega County</a></li><li level="2" id="orgUnitihZsJ8alvtb"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;ihZsJ8alvtb&quot; )">Kericho County</a></li><li level="2" id="orgUnitqKzosKQPl6G"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;qKzosKQPl6G&quot; )">Kiambu County</a></li><li level="2" id="orgUnitnrI2khZx3d0"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;nrI2khZx3d0&quot; )">Kilifi County</a></li><li level="2" id="orgUnitUlj33KBau7V"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Ulj33KBau7V&quot; )">Kirinyaga County</a></li><li level="2" id="orgUnitsPkRcDvhGWA"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;sPkRcDvhGWA&quot; )">Kisii County</a></li><li level="2" id="orgUnittAbBVBbueqD"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;tAbBVBbueqD&quot; )">Kisumu County</a></li><li level="2" id="orgUnitj8o6iO4Njsi"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;j8o6iO4Njsi&quot; )">Kitui County</a></li><li level="2" id="orgUnitN7YETT3A9r1"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;N7YETT3A9r1&quot; )">Kwale County</a></li><li level="2" id="orgUnitxuFdFy6t9AH"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;xuFdFy6t9AH&quot; )">Laikipia County</a></li><li level="2" id="orgUnitNjWSbQTwys4"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;NjWSbQTwys4&quot; )">Lamu County</a></li><li level="2" id="orgUnityhCUgGcCcOo"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;yhCUgGcCcOo&quot; )">Machakos County</a></li><li level="2" id="orgUnitBoDytkJQ4Qi"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;BoDytkJQ4Qi&quot; )">Makueni County</a></li><li level="2" id="orgUnitR6f9znhg37c"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;R6f9znhg37c&quot; )">Mandera County</a></li><li level="2" id="orgUnitEey8fT4Im3y"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Eey8fT4Im3y&quot; )">Marsabit County</a></li><li level="2" id="orgUnitY52XNJ50hYb"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;Y52XNJ50hYb&quot; )">Meru County</a></li><li level="2" id="orgUnitfVra3Pwta0Q"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;fVra3Pwta0Q&quot; )">Migori County</a></li><li level="2" id="orgUnitwsBsC6gjHvn"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;wsBsC6gjHvn&quot; )">Mombasa County</a></li><li level="2" id="orgUnitahwTMNAJvrL"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;ahwTMNAJvrL&quot; )">Muranga County</a></li><li level="2" id="orgUnitjkG3zaihdSs"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;jkG3zaihdSs&quot; )">Nairobi County</a></li><li level="2" id="orgUnitob6SxuRcqU4"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;ob6SxuRcqU4&quot; )">Nakuru County</a></li><li level="2" id="orgUnitt0J75eHKxz5"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;t0J75eHKxz5&quot; )">Nandi County</a></li><li level="2" id="orgUnitkqJ83J2D72s"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;kqJ83J2D72s&quot; )">Narok County</a></li><li level="2" id="orgUnituepLTG8wGWJ"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;uepLTG8wGWJ&quot; )">Nyamira County</a></li><li level="2" id="orgUnitmYZacFNIB3h"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;mYZacFNIB3h&quot; )">Nyandarua County</a></li><li level="2" id="orgUnitptWVfaCIdVx"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;ptWVfaCIdVx&quot; )">Nyeri County</a></li><li level="2" id="orgUnito36zCRjSd4G"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;o36zCRjSd4G&quot; )">Samburu County</a></li><li level="2" id="orgUnitu4t9H8XyU9P"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;u4t9H8XyU9P&quot; )">Siaya County</a></li><li level="2" id="orgUnitQyGNX2DpR4h"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;QyGNX2DpR4h&quot; )">Taita Taveta County</a></li><li level="2" id="orgUnitJsH2bnvNt2d"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;JsH2bnvNt2d&quot; )">Tana River County</a></li><li level="2" id="orgUnitT4urHM47nlm"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;T4urHM47nlm&quot; )">Tharaka Nithi County</a></li><li level="2" id="orgUnitmThvosEflAU"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;mThvosEflAU&quot; )">Trans-Nzoia County</a></li><li level="2" id="orgUnitkphDeKClFch"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;kphDeKClFch&quot; )">Turkana County</a></li><li level="2" id="orgUnitpZqQRRW7PHP"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;pZqQRRW7PHP&quot; )">Uasin Gishu County</a></li><li level="2" id="orgUnitsANMZ3lpqGs"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;sANMZ3lpqGs&quot; )">Vihiga County</a></li><li level="2" id="orgUnitCeLsrJOH0g9"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;CeLsrJOH0g9&quot; )">Wajir County</a></li><li level="2" id="orgUnitXWALbfAPa6n"> <span class="toggle"><img alt="[+]" src="images/colapse.png" height="9" width="9"></span> <a style="cursor: auto;" href="javascript:void selection.select( &quot;XWALbfAPa6n&quot; )">West Pokot County</a></li></ul></li></ul></div>
    <img style="display: none;" id="ouwt_loader" src="images/ajax-loader-bar.gif">
</div>

<div class="page ng-scope" id="mainPage">
    
    <!-- ngIf: !selectedOrgUnit -->

    <div class="" ng-show="selectedOrgUnit">
        <!-- top bar begins -->
        <div class="row top-bar">        
            <div class="col-sm-12">            
                <!-- ngIf: searchState --><span class="ng-binding ng-scope" ng-if="searchState">
                    Cancer Patient Search
                </span><!-- end ngIf: searchState -->
                <!-- ngIf: showRegistrationDiv -->        
                <!-- ngIf: showReportDiv -->
                <div class="pull-right not-printable">
                    <div class="btn-group" dropdown="" is-open="status.isopen">
                        <button type="button" class="btn btn-default dropdown-toggle" ng-disabled="trackedEntityList.rows.length <= 0">
                            <i class="fa fa-cog" title="Settings"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li class="" ng-show="trackedEntityList.rows.length > 0"><a class="ng-binding" href="" ng-click="showHideColumns()">Show/hide columns</a></li>
                        </ul>
                    </div>
                </div>            
            </div>        
        </div>
        <!-- top bar ends -->

        <!--- selected org unit begins -->
        <input class="ng-pristine ng-valid ng-hide" selected-org-unit="" ng-model="selectedOrgUnit.name" ng-hide="true" type="text">
        <!--- selected org unit ends  -->

        <!--- search, registration and reporting menu begins -->
        <div class="row vertical-spacing not-for-screen">
            <div class="col-md-4">
                <h4 class="ng-binding">Organisation unit</h4>
            </div>
            <div class="col-md-4">
                <input disabled="disabled" class="form-control" ng-disabled="true" value="AIC Ebenezer" type="text">
            </div>
        </div>
        <div class="row"> 
            <div id="selectDropDownParent" class="input-group col-md-4">            
                <button type="button" class="select-dropdown-button form-control ng-binding" ng-show="programs.length > 0">Canreg</button>
                <button disabled="disabled" type="button" class="select-dropdown-button form-control ng-binding ng-hide" ng-show="programs.length < 1" ng-disabled="true">[Please select a program]</button>
                <div class="input-group-btn">
                    <button class="btn btn-default select-dropdown-caret" type="button" title="List programs" data-toggle="dropdown" ng-disabled="programs.length < 1"><i class="fa fa-caret-down"></i></button>
                    <ul style="width: 35.3333px;" id="selectDropDown" class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a class="ng-binding" href="" ng-click="getProgramAttributes(null)">[Please select a program]</a>
                        </li>
                        <!-- ngRepeat: program in programs| orderBy: 'name' --><li class="ng-scope" ng-repeat="program in programs| orderBy: 'name'">
                            <a class="ng-binding" href="" ng-click="getProgramAttributes(program)">Canreg</a>
                        </li><!-- end ngRepeat: program in programs| orderBy: 'name' -->
                    </ul>
                </div>                
            </div>
            <div id="searchDropDownParent" class="input-group col-md-4 not-printable">
                <input placeholder="Type your criteria here for simple search" ng-model="searchText" class="form-control expanded ng-pristine ng-valid" d2-enter="search(searchMode.freeText)" ng-class="{true: 'invalid-input'} [!searchText &amp;&amp; emptySearchText]" ng-focus="showHideSearch()" ng-disabled="showRegistrationDiv || showReportDiv" type="text">
                <div class="input-group-btn">
                    <button class="btn btn-default search-dropdown-button trim" type="button" title="Advanced search" data-toggle="dropdown" ng-click="showHideSearch()" ng-disabled="showRegistrationDiv || showReportDiv"><i class="fa fa-caret-down"></i></button>
                    <button class="btn btn-primary trim" type="button" title="Search" ng-disabled="showRegistrationDiv || showReportDiv" ng-click="search(searchMode.freeText)"><i class="fa fa-search"></i></button>
                    <div style="width: 35.3333px;" id="searchDropDown" class="dropdown-menu dropdown-menu-right">
                        <form class="ng-pristine ng-valid" name="searchForm">
                            <div class="search-container-main">
                                <div class="search-container">    
                                    <table data-stop-propagation="true" class="table-borderless table-striped">
                                        <tbody><tr>
                                            <td class="ng-binding">Organisation unit</td>
                                            <td>                    
                                                <label class="ng-binding"><input class="ng-pristine ng-valid" ng-model="selectedOuMode.name" name="selected" value="SELECTED" type="radio"> Selected</label><br>
                                                <label class="ng-binding"><input class="ng-pristine ng-valid" ng-model="selectedOuMode.name" name="children" value="CHILDREN" type="radio"> Immediate children</label><br>
                                                <label class="ng-binding"><input class="ng-pristine ng-valid" ng-model="selectedOuMode.name" name="descendants" value="DESCENDANTS" type="radio"> All children</label><br>
                                                <label class="ng-binding"><input class="ng-pristine ng-valid" ng-model="selectedOuMode.name" name="accessible" value="ACCESSIBLE" type="radio"> All accessible</label>
                                            </td>
                                        </tr>
                                        <!-- ngIf: selectedProgram --><tr class="ng-scope" ng-if="selectedProgram">
                                            <td class="ng-binding">Enrollment date</td>
                                            <td>
                                                <div class="dataelement-filter">
                                                    <div class="filter-operator">
                                                        <select ng-model="enrollment.operator" class="form-control-select2 ng-pristine ng-valid" ng-options="operator | translate for operator in defaultOperators"><option selected="selected" value="0">Is</option><option value="1">Range</option></select>
                                                    </div>
                                                    <div class="filter-value" ng-show="enrollment.operator === defaultOperators[0]">
                                                        <input placeholder="Exact date" class="form-control-select2 ng-pristine ng-valid hasCalendarsPicker" d2-date="" max-date="0" ng-model="enrollment.programExactDate" type="text">
                                                    </div>
                                                    <div class="filter-value ng-hide" ng-show="enrollment.operator === defaultOperators[1]">
                                                        <div class="container-1-2">
                                                            <input placeholder="Start date" class="form-control-select2 ng-pristine ng-valid hasCalendarsPicker" d2-date="" ng-model="enrollment.programStartDate" type="text">
                                                        </div>
                                                        <div class="container-1-2">
                                                            <input placeholder="End date" class="form-control-select2 ng-pristine ng-valid hasCalendarsPicker" d2-date="" ng-model="enrollment.programEndDate" type="text">                
                                                        </div>
                                                    </div>                    
                                                </div>                
                                            </td>
                                        </tr><!-- end ngIf: selectedProgram -->
                                        <!-- ngRepeat: attribute in attributes --><tr class="ng-scope" ng-repeat="attribute in attributes">
                                            <td class="ng-binding">
                                                Name
                                            </td>
                                            <td>
                                                <div ng-switch="attribute.valueType">
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: date -->                        
                                                    <!-- ngSwitchWhen: optionSet -->
                                                    <!-- ngSwitchWhen: bool --> 
                                                    <!-- ngSwitchDefault:  --><div class="ng-scope" ng-switch-default="">
                                                        <input class="form-control-select2 ng-pristine ng-valid" ng-model="attribute.value" type="text"> 
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- end ngRepeat: attribute in attributes --><tr class="ng-scope" ng-repeat="attribute in attributes">
                                            <td class="ng-binding">
                                                Date of Birth
                                            </td>
                                            <td>
                                                <div ng-switch="attribute.valueType">
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: date --><div class="ng-scope" ng-switch-when="date">
                                                        <div class="dataelement-filter">
                                                            <div class="filter-operator">
                                                                <select ng-model="attribute.operator" class="form-control-select2 ng-pristine ng-valid" ng-options="operator | translate for operator in defaultOperators"><option selected="selected" value="?"></option><option value="0">Is</option><option value="1">Range</option></select>
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[0]">
                                                                <input placeholder="Exact date" class="form-control-select2 ng-pristine ng-valid hasCalendarsPicker" d2-date="" ng-model="attribute.exactValue" type="text">
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[1]">
                                                                <div class="container-1-2">
                                                                    <input placeholder="Start date" class="form-control-select2 ng-pristine ng-valid hasCalendarsPicker" d2-date="" ng-model="attribute.startValue" type="text">
                                                                </div>
                                                                <div class="container-1-2">
                                                                    <input placeholder="End date" class="form-control-select2 ng-pristine ng-valid hasCalendarsPicker" d2-date="" ng-model="attribute.endValue" type="text">                
                                                                </div>
                                                            </div>                            
                                                        </div> 
                                                    </div>                        
                                                    <!-- ngSwitchWhen: optionSet -->
                                                    <!-- ngSwitchWhen: bool --> 
                                                    <!-- ngSwitchDefault:  -->
                                                </div>
                                            </td>
                                        </tr><!-- end ngRepeat: attribute in attributes --><tr class="ng-scope" ng-repeat="attribute in attributes">
                                            <td class="ng-binding">
                                                Phone number
                                            </td>
                                            <td>
                                                <div ng-switch="attribute.valueType">
                                                    <!-- ngSwitchWhen: number --><div class="ng-scope" ng-switch-when="number">
                                                        <div class="dataelement-filter">                                                
                                                            <div class="filter-operator">
                                                                <select ng-model="attribute.operator" class="form-control-select2 ng-pristine ng-valid" ng-options="operator | translate for operator in defaultOperators"><option selected="selected" value="?"></option><option value="0">Is</option><option value="1">Range</option></select>
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[0]">
                                                                <input placeholder="Exact value" class="form-control-select2 ng-pristine ng-valid ng-valid-number" ng-model="attribute.exactValue" type="number">
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[1]">
                                                                <div class="container-1-2">
                                                                    <input placeholder="From" class="form-control-select2 ng-pristine ng-valid ng-valid-number" ng-model="attribute.startValue" type="number">
                                                                </div>
                                                                <div class="container-1-2">
                                                                    <input placeholder="To" class="form-control-select2 ng-pristine ng-valid ng-valid-number" ng-model="attribute.endValue" type="number">                
                                                                </div>
                                                            </div>                            
                                                        </div>                        
                                                    </div>
                                                    <!-- ngSwitchWhen: date -->                        
                                                    <!-- ngSwitchWhen: optionSet -->
                                                    <!-- ngSwitchWhen: bool --> 
                                                    <!-- ngSwitchDefault:  -->
                                                </div>
                                            </td>
                                        </tr><!-- end ngRepeat: attribute in attributes --><tr class="ng-scope" ng-repeat="attribute in attributes">
                                            <td class="ng-binding">
                                                Identification number
                                            </td>
                                            <td>
                                                <div ng-switch="attribute.valueType">
                                                    <!-- ngSwitchWhen: number --><div class="ng-scope" ng-switch-when="number">
                                                        <div class="dataelement-filter">                                                
                                                            <div class="filter-operator">
                                                                <select ng-model="attribute.operator" class="form-control-select2 ng-pristine ng-valid" ng-options="operator | translate for operator in defaultOperators"><option selected="selected" value="?"></option><option value="0">Is</option><option value="1">Range</option></select>
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[0]">
                                                                <input placeholder="Exact value" class="form-control-select2 ng-pristine ng-valid ng-valid-number" ng-model="attribute.exactValue" type="number">
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[1]">
                                                                <div class="container-1-2">
                                                                    <input placeholder="From" class="form-control-select2 ng-pristine ng-valid ng-valid-number" ng-model="attribute.startValue" type="number">
                                                                </div>
                                                                <div class="container-1-2">
                                                                    <input placeholder="To" class="form-control-select2 ng-pristine ng-valid ng-valid-number" ng-model="attribute.endValue" type="number">                
                                                                </div>
                                                            </div>                            
                                                        </div>                        
                                                    </div>
                                                    <!-- ngSwitchWhen: date -->                        
                                                    <!-- ngSwitchWhen: optionSet -->
                                                    <!-- ngSwitchWhen: bool --> 
                                                    <!-- ngSwitchDefault:  -->
                                                </div>
                                            </td>
                                        </tr><!-- end ngRepeat: attribute in attributes --><tr class="ng-scope" ng-repeat="attribute in attributes">
                                            <td class="ng-binding">
                                                Date of Last Contact
                                            </td>
                                            <td>
                                                <div ng-switch="attribute.valueType">
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: date --><div class="ng-scope" ng-switch-when="date">
                                                        <div class="dataelement-filter">
                                                            <div class="filter-operator">
                                                                <select ng-model="attribute.operator" class="form-control-select2 ng-pristine ng-valid" ng-options="operator | translate for operator in defaultOperators"><option selected="selected" value="?"></option><option value="0">Is</option><option value="1">Range</option></select>
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[0]">
                                                                <input placeholder="Exact date" class="form-control-select2 ng-pristine ng-valid hasCalendarsPicker" d2-date="" ng-model="attribute.exactValue" type="text">
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[1]">
                                                                <div class="container-1-2">
                                                                    <input placeholder="Start date" class="form-control-select2 ng-pristine ng-valid hasCalendarsPicker" d2-date="" ng-model="attribute.startValue" type="text">
                                                                </div>
                                                                <div class="container-1-2">
                                                                    <input placeholder="End date" class="form-control-select2 ng-pristine ng-valid hasCalendarsPicker" d2-date="" ng-model="attribute.endValue" type="text">                
                                                                </div>
                                                            </div>                            
                                                        </div> 
                                                    </div>                        
                                                    <!-- ngSwitchWhen: optionSet -->
                                                    <!-- ngSwitchWhen: bool --> 
                                                    <!-- ngSwitchDefault:  -->
                                                </div>
                                            </td>
                                        </tr><!-- end ngRepeat: attribute in attributes --><tr class="ng-scope" ng-repeat="attribute in attributes">
                                            <td class="ng-binding">
                                                Hospital Number
                                            </td>
                                            <td>
                                                <div ng-switch="attribute.valueType">
                                                    <!-- ngSwitchWhen: number --><div class="ng-scope" ng-switch-when="number">
                                                        <div class="dataelement-filter">                                                
                                                            <div class="filter-operator">
                                                                <select ng-model="attribute.operator" class="form-control-select2 ng-pristine ng-valid" ng-options="operator | translate for operator in defaultOperators"><option selected="selected" value="?"></option><option value="0">Is</option><option value="1">Range</option></select>
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[0]">
                                                                <input placeholder="Exact value" class="form-control-select2 ng-pristine ng-valid ng-valid-number" ng-model="attribute.exactValue" type="number">
                                                            </div>
                                                            <div class="filter-value ng-hide" ng-show="attribute.operator === defaultOperators[1]">
                                                                <div class="container-1-2">
                                                                    <input placeholder="From" class="form-control-select2 ng-pristine ng-valid ng-valid-number" ng-model="attribute.startValue" type="number">
                                                                </div>
                                                                <div class="container-1-2">
                                                                    <input placeholder="To" class="form-control-select2 ng-pristine ng-valid ng-valid-number" ng-model="attribute.endValue" type="number">                
                                                                </div>
                                                            </div>                            
                                                        </div>                        
                                                    </div>
                                                    <!-- ngSwitchWhen: date -->                        
                                                    <!-- ngSwitchWhen: optionSet -->
                                                    <!-- ngSwitchWhen: bool --> 
                                                    <!-- ngSwitchDefault:  -->
                                                </div>
                                            </td>
                                        </tr><!-- end ngRepeat: attribute in attributes --><tr class="ng-scope" ng-repeat="attribute in attributes">
                                            <td class="ng-binding">
                                                If Dead, cause
                                            </td>
                                            <td>
                                                <div ng-switch="attribute.valueType">
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: date -->                        
                                                    <!-- ngSwitchWhen: optionSet -->
                                                    <!-- ngSwitchWhen: bool --> 
                                                    <!-- ngSwitchDefault:  --><div class="ng-scope" ng-switch-default="">
                                                        <input class="form-control-select2 ng-pristine ng-valid" ng-model="attribute.value" type="text"> 
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- end ngRepeat: attribute in attributes --><tr class="ng-scope" ng-repeat="attribute in attributes">
                                            <td class="ng-binding">
                                                Remarks
                                            </td>
                                            <td>
                                                <div ng-switch="attribute.valueType">
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: date -->                        
                                                    <!-- ngSwitchWhen: optionSet -->
                                                    <!-- ngSwitchWhen: bool --> 
                                                    <!-- ngSwitchDefault:  --><div class="ng-scope" ng-switch-default="">
                                                        <input class="form-control-select2 ng-pristine ng-valid" ng-model="attribute.value" type="text"> 
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- end ngRepeat: attribute in attributes -->         
                                    </tbody></table>
                                </div>

                                <div class="horizonal-spacing">
                                    <button type="button" class="btn btn-primary ng-binding" ng-click="search(searchMode.attributeBased)">
                                        Search
                                    </button>
                                    <button type="button" class="btn btn-success small-horizonal-spacing ng-binding" ng-click="search(searchMode.listAll)">
                                        List all
                                    </button>        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>        
            <div class="col-md-4 trim not-printable">            
                <button type="button" class="btn btn-success ng-binding" ng-disabled="showRegistrationDiv || showReportDiv" ng-click="search(searchMode.listAll)">
                    List all
                </button>
                <button type="button" class="btn btn-primary ng-binding" ng-disabled="showReportDiv" ng-click="showRegistration()">                    
                    Register
                </button>
                <!-- ngIf: teiCount > 0 --><button type="button" class="btn btn-info ng-binding ng-scope" ng-if="teiCount > 0" onclick="javascript:window.print()">                    
                    Print
                </button><!-- end ngIf: teiCount > 0 -->
            </div>
        </div>
        <!--- search, registration and reporting menu ends -->

        <!--- Error display for search begins -->
        <!-- ngIf: emptySearchAttribute || !searchText && emptySearchText -->
        <!--- Error display for search ends -->

        <!--registration form begins -->
        <!-- ngIf: showRegistrationDiv -->
        <!-- registration form ends -->

        <!--report div begins -->
        <!-- ngIf: showReportDiv -->
        <!-- report div ends -->

        <!-- entity grid begins -->
        <!-- ngIf: !teiFetched && searchText && !emptySearchTex -->
        <!-- ngIf: showTrackedEntityDiv --><div class="row ng-scope" ng-if="showTrackedEntityDiv">
            <!-- ngInclude: 'views/tei.html' --><div class="col-md-12 ng-scope" ng-include="'views/tei.html'"><div class="ng-scope" ng-switch="teiCount">                    
    <!-- ngSwitchWhen: undefined -->
    <!-- ngSwitchWhen: 0 -->    
    <!-- ngSwitchDefault:  --><div class="ng-scope" ng-switch-default=""> 
        
        <!-- entity begins -->
        <div class="vertical-spacing">
            <table class="table table-striped dhis2-table-hover table-bordered">               
                <thead>                        
                    <tr>
                        <!-- ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            Name
                        </th><!-- end ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            Date of Birth
                        </th><!-- end ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            Phone number
                        </th><!-- end ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            Identification number
                        </th><!-- end ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            Date of Last Contact
                        </th><!-- end ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            Hospital Number
                        </th><!-- end ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            If Dead, cause
                        </th><!-- end ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            Remarks
                        </th><!-- end ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            Registering unit
                        </th><!-- end ngRepeat: gridColumn in gridColumns --><th class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">
                            Registration date
                        </th><!-- end ngRepeat: gridColumn in gridColumns -->                                    
                    </tr>                        
                </thead>
                <tbody id="list">
                    <!-- ngRepeat: trackedEntity in trackedEntityList.rows --><tr class="ng-scope" ng-repeat="trackedEntity in trackedEntityList.rows" ng-click="showDashboard(trackedEntity)" title="Go to dashboard">
                        <!-- ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            dorcas                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-03                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            702359132                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            397554676                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            AIC Ebenezer                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-03                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns -->
                    </tr><!-- end ngRepeat: trackedEntity in trackedEntityList.rows --><tr class="ng-scope" ng-repeat="trackedEntity in trackedEntityList.rows" ng-click="showDashboard(trackedEntity)" title="Go to dashboard">
                        <!-- ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            Maryanne                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-04                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            706987415                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            320789587                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            AIC Ebenezer                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-03                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns -->
                    </tr><!-- end ngRepeat: trackedEntity in trackedEntityList.rows --><tr class="ng-scope" ng-repeat="trackedEntity in trackedEntityList.rows" ng-click="showDashboard(trackedEntity)" title="Go to dashboard">
                        <!-- ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            jonathan                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            1987-06-11                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            700124578                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            28365987                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                                                                            
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            AIC Ebenezer                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-04                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns -->
                    </tr><!-- end ngRepeat: trackedEntity in trackedEntityList.rows --><tr class="ng-scope" ng-repeat="trackedEntity in trackedEntityList.rows" ng-click="showDashboard(trackedEntity)" title="Go to dashboard">
                        <!-- ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            philip                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            1994-06-24                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            706810442                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            30600240                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-04                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            214                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            null                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            Severely ill                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            AIC Ebenezer                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-04                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns -->
                    </tr><!-- end ngRepeat: trackedEntity in trackedEntityList.rows --><tr class="ng-scope" ng-repeat="trackedEntity in trackedEntityList.rows" ng-click="showDashboard(trackedEntity)" title="Go to dashboard">
                        <!-- ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            kilu                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-04                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            7124586                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            20154876                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-05                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            1254                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            heat                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            died with early stage cancer                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            AIC Ebenezer                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-04                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns -->
                    </tr><!-- end ngRepeat: trackedEntity in trackedEntityList.rows --><tr class="ng-scope" ng-repeat="trackedEntity in trackedEntityList.rows" ng-click="showDashboard(trackedEntity)" title="Go to dashboard">
                        <!-- ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            Jones                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-05-05                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            8733434                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            3022335                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-03-09                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            214                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            sick                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            need urgent  help                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            AIC Ebenezer                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns --><td class="ng-binding ng-scope ng-hide" ng-show="gridColumn.show" ng-repeat="gridColumn in gridColumns">                                                
                            2015-06-04                                                
                        </td><!-- end ngRepeat: gridColumn in gridColumns -->
                    </tr><!-- end ngRepeat: trackedEntity in trackedEntityList.rows -->
                </tbody>        
            </table>
        </div>
        <!-- entity ends -->      
        <!-- ngIf: pager.pageCount > 1 -->                  
    </div>
</div> </div>  
        </div><!-- end ngIf: showTrackedEntityDiv -->
        <!-- entity grid ends -->
    </div>
    
</div>           


</div>    

    
<ul style="display: none;" tabindex="0" id="ui-id-1" class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all"></ul></body></html>

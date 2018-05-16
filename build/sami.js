
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">[Global Namespace]</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:AddFksToUsersTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="AddFksToUsersTable.html">AddFksToUsersTable</a>                    </div>                </li>                            <li data-name="class:CreateContainerMaterialTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateContainerMaterialTable.html">CreateContainerMaterialTable</a>                    </div>                </li>                            <li data-name="class:CreateContainerNamesTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateContainerNamesTable.html">CreateContainerNamesTable</a>                    </div>                </li>                            <li data-name="class:CreateContainersTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateContainersTable.html">CreateContainersTable</a>                    </div>                </li>                            <li data-name="class:CreateLocationsTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateLocationsTable.html">CreateLocationsTable</a>                    </div>                </li>                            <li data-name="class:CreateMaterialsTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateMaterialsTable.html">CreateMaterialsTable</a>                    </div>                </li>                            <li data-name="class:CreatePasswordResetsTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreatePasswordResetsTable.html">CreatePasswordResetsTable</a>                    </div>                </li>                            <li data-name="class:CreateRegionsTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateRegionsTable.html">CreateRegionsTable</a>                    </div>                </li>                            <li data-name="class:CreateUsersTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateUsersTable.html">CreateUsersTable</a>                    </div>                </li>                            <li data-name="class:CreateVehicleInsurersTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateVehicleInsurersTable.html">CreateVehicleInsurersTable</a>                    </div>                </li>                            <li data-name="class:CreateVehicleOwnersTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateVehicleOwnersTable.html">CreateVehicleOwnersTable</a>                    </div>                </li>                            <li data-name="class:CreateVehicleTypesTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateVehicleTypesTable.html">CreateVehicleTypesTable</a>                    </div>                </li>                            <li data-name="class:CreateVehiclesTable" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="CreateVehiclesTable.html">CreateVehiclesTable</a>                    </div>                </li>                            <li data-name="class:DatabaseSeeder" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="DatabaseSeeder.html">DatabaseSeeder</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App.html">App</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Console" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Console.html">Console</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Console_Kernel" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Console/Kernel.html">Kernel</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Exceptions" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Exceptions.html">Exceptions</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Exceptions_Handler" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Exceptions/Handler.html">Handler</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Helpers" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Helpers.html">Helpers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Helpers_SomeClass" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Helpers/SomeClass.html">SomeClass</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http.html">Http</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Http_Controllers" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Controllers.html">Controllers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Http_Controllers_Auth" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Controllers/Auth.html">Auth</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Controllers_Auth_AuthController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/AuthController.html">AuthController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_ForgotPasswordController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/ForgotPasswordController.html">ForgotPasswordController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_LoginController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/LoginController.html">LoginController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_RegisterController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/RegisterController.html">RegisterController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_ResetPasswordController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/ResetPasswordController.html">ResetPasswordController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Http_Controllers_BackupController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/BackupController.html">BackupController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_ContainerController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/ContainerController.html">ContainerController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_ContainerNameController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/ContainerNameController.html">ContainerNameController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Controller" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/Controller.html">Controller</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_HomeController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/HomeController.html">HomeController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_InventoryController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/InventoryController.html">InventoryController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_LocationController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/LocationController.html">LocationController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_MaterialController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/MaterialController.html">MaterialController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_PDFController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/PDFController.html">PDFController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_RegionController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/RegionController.html">RegionController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_UserController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/UserController.html">UserController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_VehicleController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/VehicleController.html">VehicleController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http_Middleware" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Middleware.html">Middleware</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Middleware_EncryptCookies" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/EncryptCookies.html">EncryptCookies</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_RedirectIfAuthenticated" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/RedirectIfAuthenticated.html">RedirectIfAuthenticated</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_TrimStrings" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/TrimStrings.html">TrimStrings</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_TrustProxies" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/TrustProxies.html">TrustProxies</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_VerifyCsrfToken" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/VerifyCsrfToken.html">VerifyCsrfToken</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Http_Kernel" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Http/Kernel.html">Kernel</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Providers" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Providers.html">Providers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Providers_AppServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/AppServiceProvider.html">AppServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_AuthServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/AuthServiceProvider.html">AuthServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_BroadcastServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/BroadcastServiceProvider.html">BroadcastServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_EventServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/EventServiceProvider.html">EventServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_RouteServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/RouteServiceProvider.html">RouteServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Container" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Container.html">Container</a>                    </div>                </li>                            <li data-name="class:App_ContainerMaterial" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/ContainerMaterial.html">ContainerMaterial</a>                    </div>                </li>                            <li data-name="class:App_ContainerName" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/ContainerName.html">ContainerName</a>                    </div>                </li>                            <li data-name="class:App_Location" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Location.html">Location</a>                    </div>                </li>                            <li data-name="class:App_Material" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Material.html">Material</a>                    </div>                </li>                            <li data-name="class:App_Region" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Region.html">Region</a>                    </div>                </li>                            <li data-name="class:App_User" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/User.html">User</a>                    </div>                </li>                            <li data-name="class:App_Vehicle" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Vehicle.html">Vehicle</a>                    </div>                </li>                            <li data-name="class:App_VehicleInsurer" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/VehicleInsurer.html">VehicleInsurer</a>                    </div>                </li>                            <li data-name="class:App_VehicleOwner" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/VehicleOwner.html">VehicleOwner</a>                    </div>                </li>                            <li data-name="class:App_VehicleType" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/VehicleType.html">VehicleType</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tests" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tests.html">Tests</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tests_Browser" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tests/Browser.html">Browser</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tests_Browser_Pages" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tests/Browser/Pages.html">Pages</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tests_Browser_Pages_HomePage" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tests/Browser/Pages/HomePage.html">HomePage</a>                    </div>                </li>                            <li data-name="class:Tests_Browser_Pages_Page" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tests/Browser/Pages/Page.html">Page</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tests_Browser_ExampleTest" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tests/Browser/ExampleTest.html">ExampleTest</a>                    </div>                </li>                            <li data-name="class:Tests_Browser_LoginTest" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tests/Browser/LoginTest.html">LoginTest</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tests_Feature" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tests/Feature.html">Feature</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tests_Feature_ExampleTest" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tests/Feature/ExampleTest.html">ExampleTest</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tests_Unit" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tests/Unit.html">Unit</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tests_Unit_ExampleTest" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tests/Unit/ExampleTest.html">ExampleTest</a>                    </div>                </li>                            <li data-name="class:Tests_Unit_LoginTest" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tests/Unit/LoginTest.html">LoginTest</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tests_CreatesApplication" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Tests/CreatesApplication.html">CreatesApplication</a>                    </div>                </li>                            <li data-name="class:Tests_DuskTestCase" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Tests/DuskTestCase.html">DuskTestCase</a>                    </div>                </li>                            <li data-name="class:Tests_TestCase" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Tests/TestCase.html">TestCase</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": ".html", "name": "", "doc": "Namespace "},{"type": "Namespace", "link": "App.html", "name": "App", "doc": "Namespace App"},{"type": "Namespace", "link": "App/Console.html", "name": "App\\Console", "doc": "Namespace App\\Console"},{"type": "Namespace", "link": "App/Exceptions.html", "name": "App\\Exceptions", "doc": "Namespace App\\Exceptions"},{"type": "Namespace", "link": "App/Helpers.html", "name": "App\\Helpers", "doc": "Namespace App\\Helpers"},{"type": "Namespace", "link": "App/Http.html", "name": "App\\Http", "doc": "Namespace App\\Http"},{"type": "Namespace", "link": "App/Http/Controllers.html", "name": "App\\Http\\Controllers", "doc": "Namespace App\\Http\\Controllers"},{"type": "Namespace", "link": "App/Http/Controllers/Auth.html", "name": "App\\Http\\Controllers\\Auth", "doc": "Namespace App\\Http\\Controllers\\Auth"},{"type": "Namespace", "link": "App/Http/Middleware.html", "name": "App\\Http\\Middleware", "doc": "Namespace App\\Http\\Middleware"},{"type": "Namespace", "link": "App/Providers.html", "name": "App\\Providers", "doc": "Namespace App\\Providers"},{"type": "Namespace", "link": "Tests.html", "name": "Tests", "doc": "Namespace Tests"},{"type": "Namespace", "link": "Tests/Browser.html", "name": "Tests\\Browser", "doc": "Namespace Tests\\Browser"},{"type": "Namespace", "link": "Tests/Browser/Pages.html", "name": "Tests\\Browser\\Pages", "doc": "Namespace Tests\\Browser\\Pages"},{"type": "Namespace", "link": "Tests/Feature.html", "name": "Tests\\Feature", "doc": "Namespace Tests\\Feature"},{"type": "Namespace", "link": "Tests/Unit.html", "name": "Tests\\Unit", "doc": "Namespace Tests\\Unit"},
            
            {"type": "Class",  "link": "AddFksToUsersTable.html", "name": "AddFksToUsersTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "AddFksToUsersTable", "fromLink": "AddFksToUsersTable.html", "link": "AddFksToUsersTable.html#method_up", "name": "AddFksToUsersTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "AddFksToUsersTable", "fromLink": "AddFksToUsersTable.html", "link": "AddFksToUsersTable.html#method_down", "name": "AddFksToUsersTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class", "fromName": "App\\Console", "fromLink": "App/Console.html", "link": "App/Console/Kernel.html", "name": "App\\Console\\Kernel", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Console\\Kernel", "fromLink": "App/Console/Kernel.html", "link": "App/Console/Kernel.html#method_schedule", "name": "App\\Console\\Kernel::schedule", "doc": "&quot;Define the application&#039;s command schedule.&quot;"},
                    {"type": "Method", "fromName": "App\\Console\\Kernel", "fromLink": "App/Console/Kernel.html", "link": "App/Console/Kernel.html#method_commands", "name": "App\\Console\\Kernel::commands", "doc": "&quot;Register the commands for the application.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Container.html", "name": "App\\Container", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Container", "fromLink": "App/Container.html", "link": "App/Container.html#method_parent", "name": "App\\Container::parent", "doc": "&quot;Parent Container.&quot;"},
                    {"type": "Method", "fromName": "App\\Container", "fromLink": "App/Container.html", "link": "App/Container.html#method_containers", "name": "App\\Container::containers", "doc": "&quot;Containers.&quot;"},
                    {"type": "Method", "fromName": "App\\Container", "fromLink": "App/Container.html", "link": "App/Container.html#method_user", "name": "App\\Container::user", "doc": "&quot;User.&quot;"},
                    {"type": "Method", "fromName": "App\\Container", "fromLink": "App/Container.html", "link": "App/Container.html#method_vehicle", "name": "App\\Container::vehicle", "doc": "&quot;Vehicle.&quot;"},
                    {"type": "Method", "fromName": "App\\Container", "fromLink": "App/Container.html", "link": "App/Container.html#method_container_name", "name": "App\\Container::container_name", "doc": "&quot;Name.&quot;"},
                    {"type": "Method", "fromName": "App\\Container", "fromLink": "App/Container.html", "link": "App/Container.html#method_nom", "name": "App\\Container::nom", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Container", "fromLink": "App/Container.html", "link": "App/Container.html#method_materials", "name": "App\\Container::materials", "doc": "&quot;Materials.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/ContainerMaterial.html", "name": "App\\ContainerMaterial", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\ContainerMaterial", "fromLink": "App/ContainerMaterial.html", "link": "App/ContainerMaterial.html#method_material", "name": "App\\ContainerMaterial::material", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/ContainerName.html", "name": "App\\ContainerName", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\ContainerName", "fromLink": "App/ContainerName.html", "link": "App/ContainerName.html#method_containers", "name": "App\\ContainerName::containers", "doc": "&quot;Container.&quot;"},
            
            {"type": "Class", "fromName": "App\\Exceptions", "fromLink": "App/Exceptions.html", "link": "App/Exceptions/Handler.html", "name": "App\\Exceptions\\Handler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Exceptions\\Handler", "fromLink": "App/Exceptions/Handler.html", "link": "App/Exceptions/Handler.html#method_report", "name": "App\\Exceptions\\Handler::report", "doc": "&quot;Report or log an exception.&quot;"},
                    {"type": "Method", "fromName": "App\\Exceptions\\Handler", "fromLink": "App/Exceptions/Handler.html", "link": "App/Exceptions/Handler.html#method_render", "name": "App\\Exceptions\\Handler::render", "doc": "&quot;Render an exception into an HTTP response.&quot;"},
            
            {"type": "Class", "fromName": "App\\Helpers", "fromLink": "App/Helpers.html", "link": "App/Helpers/SomeClass.html", "name": "App\\Helpers\\SomeClass", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Helpers\\SomeClass", "fromLink": "App/Helpers/SomeClass.html", "link": "App/Helpers/SomeClass.html#method_bytesToHuman", "name": "App\\Helpers\\SomeClass::bytesToHuman", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/AuthController.html", "name": "App\\Http\\Controllers\\Auth\\AuthController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\AuthController", "fromLink": "App/Http/Controllers/Auth/AuthController.html", "link": "App/Http/Controllers/Auth/AuthController.html#method_redirectToProvider", "name": "App\\Http\\Controllers\\Auth\\AuthController::redirectToProvider", "doc": "&quot;Redirect the user to the GitHub authentication page.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\AuthController", "fromLink": "App/Http/Controllers/Auth/AuthController.html", "link": "App/Http/Controllers/Auth/AuthController.html#method_handleProviderCallback", "name": "App\\Http\\Controllers\\Auth\\AuthController::handleProviderCallback", "doc": "&quot;Obtain the user information from GitHub.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/ForgotPasswordController.html", "name": "App\\Http\\Controllers\\Auth\\ForgotPasswordController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\ForgotPasswordController", "fromLink": "App/Http/Controllers/Auth/ForgotPasswordController.html", "link": "App/Http/Controllers/Auth/ForgotPasswordController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\ForgotPasswordController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/LoginController.html", "name": "App\\Http\\Controllers\\Auth\\LoginController", "doc": "&quot;Class LoginController&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\LoginController", "fromLink": "App/Http/Controllers/Auth/LoginController.html", "link": "App/Http/Controllers/Auth/LoginController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\LoginController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\LoginController", "fromLink": "App/Http/Controllers/Auth/LoginController.html", "link": "App/Http/Controllers/Auth/LoginController.html#method_username", "name": "App\\Http\\Controllers\\Auth\\LoginController::username", "doc": "&quot;Check either username or email.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/RegisterController.html", "name": "App\\Http\\Controllers\\Auth\\RegisterController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\RegisterController", "fromLink": "App/Http/Controllers/Auth/RegisterController.html", "link": "App/Http/Controllers/Auth/RegisterController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\RegisterController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\RegisterController", "fromLink": "App/Http/Controllers/Auth/RegisterController.html", "link": "App/Http/Controllers/Auth/RegisterController.html#method_validator", "name": "App\\Http\\Controllers\\Auth\\RegisterController::validator", "doc": "&quot;Get a validator for an incoming registration request.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\RegisterController", "fromLink": "App/Http/Controllers/Auth/RegisterController.html", "link": "App/Http/Controllers/Auth/RegisterController.html#method_create", "name": "App\\Http\\Controllers\\Auth\\RegisterController::create", "doc": "&quot;Create a new user instance after a valid registration.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/ResetPasswordController.html", "name": "App\\Http\\Controllers\\Auth\\ResetPasswordController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\ResetPasswordController", "fromLink": "App/Http/Controllers/Auth/ResetPasswordController.html", "link": "App/Http/Controllers/Auth/ResetPasswordController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\ResetPasswordController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/BackupController.html", "name": "App\\Http\\Controllers\\BackupController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\BackupController", "fromLink": "App/Http/Controllers/BackupController.html", "link": "App/Http/Controllers/BackupController.html#method___construct", "name": "App\\Http\\Controllers\\BackupController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\BackupController", "fromLink": "App/Http/Controllers/BackupController.html", "link": "App/Http/Controllers/BackupController.html#method_index", "name": "App\\Http\\Controllers\\BackupController::index", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\BackupController", "fromLink": "App/Http/Controllers/BackupController.html", "link": "App/Http/Controllers/BackupController.html#method_create", "name": "App\\Http\\Controllers\\BackupController::create", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\BackupController", "fromLink": "App/Http/Controllers/BackupController.html", "link": "App/Http/Controllers/BackupController.html#method_download", "name": "App\\Http\\Controllers\\BackupController::download", "doc": "&quot;Downloads a backup zip file.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\BackupController", "fromLink": "App/Http/Controllers/BackupController.html", "link": "App/Http/Controllers/BackupController.html#method_delete", "name": "App\\Http\\Controllers\\BackupController::delete", "doc": "&quot;Deletes a backup file.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/ContainerController.html", "name": "App\\Http\\Controllers\\ContainerController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerController", "fromLink": "App/Http/Controllers/ContainerController.html", "link": "App/Http/Controllers/ContainerController.html#method___construct", "name": "App\\Http\\Controllers\\ContainerController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerController", "fromLink": "App/Http/Controllers/ContainerController.html", "link": "App/Http/Controllers/ContainerController.html#method_index", "name": "App\\Http\\Controllers\\ContainerController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerController", "fromLink": "App/Http/Controllers/ContainerController.html", "link": "App/Http/Controllers/ContainerController.html#method_create", "name": "App\\Http\\Controllers\\ContainerController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerController", "fromLink": "App/Http/Controllers/ContainerController.html", "link": "App/Http/Controllers/ContainerController.html#method_store", "name": "App\\Http\\Controllers\\ContainerController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerController", "fromLink": "App/Http/Controllers/ContainerController.html", "link": "App/Http/Controllers/ContainerController.html#method_show", "name": "App\\Http\\Controllers\\ContainerController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerController", "fromLink": "App/Http/Controllers/ContainerController.html", "link": "App/Http/Controllers/ContainerController.html#method_edit", "name": "App\\Http\\Controllers\\ContainerController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerController", "fromLink": "App/Http/Controllers/ContainerController.html", "link": "App/Http/Controllers/ContainerController.html#method_update", "name": "App\\Http\\Controllers\\ContainerController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerController", "fromLink": "App/Http/Controllers/ContainerController.html", "link": "App/Http/Controllers/ContainerController.html#method_destroy", "name": "App\\Http\\Controllers\\ContainerController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/ContainerNameController.html", "name": "App\\Http\\Controllers\\ContainerNameController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerNameController", "fromLink": "App/Http/Controllers/ContainerNameController.html", "link": "App/Http/Controllers/ContainerNameController.html#method___construct", "name": "App\\Http\\Controllers\\ContainerNameController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerNameController", "fromLink": "App/Http/Controllers/ContainerNameController.html", "link": "App/Http/Controllers/ContainerNameController.html#method_index", "name": "App\\Http\\Controllers\\ContainerNameController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerNameController", "fromLink": "App/Http/Controllers/ContainerNameController.html", "link": "App/Http/Controllers/ContainerNameController.html#method_create", "name": "App\\Http\\Controllers\\ContainerNameController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerNameController", "fromLink": "App/Http/Controllers/ContainerNameController.html", "link": "App/Http/Controllers/ContainerNameController.html#method_store", "name": "App\\Http\\Controllers\\ContainerNameController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerNameController", "fromLink": "App/Http/Controllers/ContainerNameController.html", "link": "App/Http/Controllers/ContainerNameController.html#method_show", "name": "App\\Http\\Controllers\\ContainerNameController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerNameController", "fromLink": "App/Http/Controllers/ContainerNameController.html", "link": "App/Http/Controllers/ContainerNameController.html#method_edit", "name": "App\\Http\\Controllers\\ContainerNameController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerNameController", "fromLink": "App/Http/Controllers/ContainerNameController.html", "link": "App/Http/Controllers/ContainerNameController.html#method_update", "name": "App\\Http\\Controllers\\ContainerNameController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ContainerNameController", "fromLink": "App/Http/Controllers/ContainerNameController.html", "link": "App/Http/Controllers/ContainerNameController.html#method_destroy", "name": "App\\Http\\Controllers\\ContainerNameController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/Controller.html", "name": "App\\Http\\Controllers\\Controller", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/HomeController.html", "name": "App\\Http\\Controllers\\HomeController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\HomeController", "fromLink": "App/Http/Controllers/HomeController.html", "link": "App/Http/Controllers/HomeController.html#method___construct", "name": "App\\Http\\Controllers\\HomeController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\HomeController", "fromLink": "App/Http/Controllers/HomeController.html", "link": "App/Http/Controllers/HomeController.html#method_index", "name": "App\\Http\\Controllers\\HomeController::index", "doc": "&quot;Show the application dashboard.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\HomeController", "fromLink": "App/Http/Controllers/HomeController.html", "link": "App/Http/Controllers/HomeController.html#method_filtre", "name": "App\\Http\\Controllers\\HomeController::filtre", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/InventoryController.html", "name": "App\\Http\\Controllers\\InventoryController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\InventoryController", "fromLink": "App/Http/Controllers/InventoryController.html", "link": "App/Http/Controllers/InventoryController.html#method___construct", "name": "App\\Http\\Controllers\\InventoryController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\InventoryController", "fromLink": "App/Http/Controllers/InventoryController.html", "link": "App/Http/Controllers/InventoryController.html#method_update", "name": "App\\Http\\Controllers\\InventoryController::update", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/LocationController.html", "name": "App\\Http\\Controllers\\LocationController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\LocationController", "fromLink": "App/Http/Controllers/LocationController.html", "link": "App/Http/Controllers/LocationController.html#method___construct", "name": "App\\Http\\Controllers\\LocationController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\LocationController", "fromLink": "App/Http/Controllers/LocationController.html", "link": "App/Http/Controllers/LocationController.html#method_index", "name": "App\\Http\\Controllers\\LocationController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\LocationController", "fromLink": "App/Http/Controllers/LocationController.html", "link": "App/Http/Controllers/LocationController.html#method_create", "name": "App\\Http\\Controllers\\LocationController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\LocationController", "fromLink": "App/Http/Controllers/LocationController.html", "link": "App/Http/Controllers/LocationController.html#method_store", "name": "App\\Http\\Controllers\\LocationController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\LocationController", "fromLink": "App/Http/Controllers/LocationController.html", "link": "App/Http/Controllers/LocationController.html#method_show", "name": "App\\Http\\Controllers\\LocationController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\LocationController", "fromLink": "App/Http/Controllers/LocationController.html", "link": "App/Http/Controllers/LocationController.html#method_edit", "name": "App\\Http\\Controllers\\LocationController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\LocationController", "fromLink": "App/Http/Controllers/LocationController.html", "link": "App/Http/Controllers/LocationController.html#method_update", "name": "App\\Http\\Controllers\\LocationController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\LocationController", "fromLink": "App/Http/Controllers/LocationController.html", "link": "App/Http/Controllers/LocationController.html#method_destroy", "name": "App\\Http\\Controllers\\LocationController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/MaterialController.html", "name": "App\\Http\\Controllers\\MaterialController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\MaterialController", "fromLink": "App/Http/Controllers/MaterialController.html", "link": "App/Http/Controllers/MaterialController.html#method___construct", "name": "App\\Http\\Controllers\\MaterialController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\MaterialController", "fromLink": "App/Http/Controllers/MaterialController.html", "link": "App/Http/Controllers/MaterialController.html#method_index", "name": "App\\Http\\Controllers\\MaterialController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\MaterialController", "fromLink": "App/Http/Controllers/MaterialController.html", "link": "App/Http/Controllers/MaterialController.html#method_create", "name": "App\\Http\\Controllers\\MaterialController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\MaterialController", "fromLink": "App/Http/Controllers/MaterialController.html", "link": "App/Http/Controllers/MaterialController.html#method_store", "name": "App\\Http\\Controllers\\MaterialController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\MaterialController", "fromLink": "App/Http/Controllers/MaterialController.html", "link": "App/Http/Controllers/MaterialController.html#method_show", "name": "App\\Http\\Controllers\\MaterialController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\MaterialController", "fromLink": "App/Http/Controllers/MaterialController.html", "link": "App/Http/Controllers/MaterialController.html#method_edit", "name": "App\\Http\\Controllers\\MaterialController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\MaterialController", "fromLink": "App/Http/Controllers/MaterialController.html", "link": "App/Http/Controllers/MaterialController.html#method_update", "name": "App\\Http\\Controllers\\MaterialController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\MaterialController", "fromLink": "App/Http/Controllers/MaterialController.html", "link": "App/Http/Controllers/MaterialController.html#method_destroy", "name": "App\\Http\\Controllers\\MaterialController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/PDFController.html", "name": "App\\Http\\Controllers\\PDFController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\PDFController", "fromLink": "App/Http/Controllers/PDFController.html", "link": "App/Http/Controllers/PDFController.html#method___construct", "name": "App\\Http\\Controllers\\PDFController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PDFController", "fromLink": "App/Http/Controllers/PDFController.html", "link": "App/Http/Controllers/PDFController.html#method_crearPDF", "name": "App\\Http\\Controllers\\PDFController::crearPDF", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PDFController", "fromLink": "App/Http/Controllers/PDFController.html", "link": "App/Http/Controllers/PDFController.html#method_getData", "name": "App\\Http\\Controllers\\PDFController::getData", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/RegionController.html", "name": "App\\Http\\Controllers\\RegionController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\RegionController", "fromLink": "App/Http/Controllers/RegionController.html", "link": "App/Http/Controllers/RegionController.html#method___construct", "name": "App\\Http\\Controllers\\RegionController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\RegionController", "fromLink": "App/Http/Controllers/RegionController.html", "link": "App/Http/Controllers/RegionController.html#method_index", "name": "App\\Http\\Controllers\\RegionController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\RegionController", "fromLink": "App/Http/Controllers/RegionController.html", "link": "App/Http/Controllers/RegionController.html#method_create", "name": "App\\Http\\Controllers\\RegionController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\RegionController", "fromLink": "App/Http/Controllers/RegionController.html", "link": "App/Http/Controllers/RegionController.html#method_store", "name": "App\\Http\\Controllers\\RegionController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\RegionController", "fromLink": "App/Http/Controllers/RegionController.html", "link": "App/Http/Controllers/RegionController.html#method_show", "name": "App\\Http\\Controllers\\RegionController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\RegionController", "fromLink": "App/Http/Controllers/RegionController.html", "link": "App/Http/Controllers/RegionController.html#method_edit", "name": "App\\Http\\Controllers\\RegionController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\RegionController", "fromLink": "App/Http/Controllers/RegionController.html", "link": "App/Http/Controllers/RegionController.html#method_update", "name": "App\\Http\\Controllers\\RegionController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\RegionController", "fromLink": "App/Http/Controllers/RegionController.html", "link": "App/Http/Controllers/RegionController.html#method_destroy", "name": "App\\Http\\Controllers\\RegionController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/UserController.html", "name": "App\\Http\\Controllers\\UserController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\UserController", "fromLink": "App/Http/Controllers/UserController.html", "link": "App/Http/Controllers/UserController.html#method___construct", "name": "App\\Http\\Controllers\\UserController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\UserController", "fromLink": "App/Http/Controllers/UserController.html", "link": "App/Http/Controllers/UserController.html#method_index", "name": "App\\Http\\Controllers\\UserController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\UserController", "fromLink": "App/Http/Controllers/UserController.html", "link": "App/Http/Controllers/UserController.html#method_create", "name": "App\\Http\\Controllers\\UserController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\UserController", "fromLink": "App/Http/Controllers/UserController.html", "link": "App/Http/Controllers/UserController.html#method_store", "name": "App\\Http\\Controllers\\UserController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\UserController", "fromLink": "App/Http/Controllers/UserController.html", "link": "App/Http/Controllers/UserController.html#method_show", "name": "App\\Http\\Controllers\\UserController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\UserController", "fromLink": "App/Http/Controllers/UserController.html", "link": "App/Http/Controllers/UserController.html#method_edit", "name": "App\\Http\\Controllers\\UserController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\UserController", "fromLink": "App/Http/Controllers/UserController.html", "link": "App/Http/Controllers/UserController.html#method_update", "name": "App\\Http\\Controllers\\UserController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\UserController", "fromLink": "App/Http/Controllers/UserController.html", "link": "App/Http/Controllers/UserController.html#method_destroy", "name": "App\\Http\\Controllers\\UserController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/VehicleController.html", "name": "App\\Http\\Controllers\\VehicleController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method___construct", "name": "App\\Http\\Controllers\\VehicleController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method_index", "name": "App\\Http\\Controllers\\VehicleController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method_create", "name": "App\\Http\\Controllers\\VehicleController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method_store", "name": "App\\Http\\Controllers\\VehicleController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method_show", "name": "App\\Http\\Controllers\\VehicleController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method_edit", "name": "App\\Http\\Controllers\\VehicleController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method_update", "name": "App\\Http\\Controllers\\VehicleController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method_destroy", "name": "App\\Http\\Controllers\\VehicleController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method_qr", "name": "App\\Http\\Controllers\\VehicleController::qr", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\VehicleController", "fromLink": "App/Http/Controllers/VehicleController.html", "link": "App/Http/Controllers/VehicleController.html#method_material", "name": "App\\Http\\Controllers\\VehicleController::material", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Http", "fromLink": "App/Http.html", "link": "App/Http/Kernel.html", "name": "App\\Http\\Kernel", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/EncryptCookies.html", "name": "App\\Http\\Middleware\\EncryptCookies", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/RedirectIfAuthenticated.html", "name": "App\\Http\\Middleware\\RedirectIfAuthenticated", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Middleware\\RedirectIfAuthenticated", "fromLink": "App/Http/Middleware/RedirectIfAuthenticated.html", "link": "App/Http/Middleware/RedirectIfAuthenticated.html#method_handle", "name": "App\\Http\\Middleware\\RedirectIfAuthenticated::handle", "doc": "&quot;Handle an incoming request.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/TrimStrings.html", "name": "App\\Http\\Middleware\\TrimStrings", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/TrustProxies.html", "name": "App\\Http\\Middleware\\TrustProxies", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/VerifyCsrfToken.html", "name": "App\\Http\\Middleware\\VerifyCsrfToken", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Location.html", "name": "App\\Location", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Location", "fromLink": "App/Location.html", "link": "App/Location.html#method_region", "name": "App\\Location::region", "doc": "&quot;Region.&quot;"},
                    {"type": "Method", "fromName": "App\\Location", "fromLink": "App/Location.html", "link": "App/Location.html#method_user", "name": "App\\Location::user", "doc": "&quot;Get the user that owns the location.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Material.html", "name": "App\\Material", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Material", "fromLink": "App/Material.html", "link": "App/Material.html#method_containers", "name": "App\\Material::containers", "doc": "&quot;Container.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/AppServiceProvider.html", "name": "App\\Providers\\AppServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\AppServiceProvider", "fromLink": "App/Providers/AppServiceProvider.html", "link": "App/Providers/AppServiceProvider.html#method_boot", "name": "App\\Providers\\AppServiceProvider::boot", "doc": "&quot;Bootstrap any application services.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\AppServiceProvider", "fromLink": "App/Providers/AppServiceProvider.html", "link": "App/Providers/AppServiceProvider.html#method_register", "name": "App\\Providers\\AppServiceProvider::register", "doc": "&quot;Register any application services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/AuthServiceProvider.html", "name": "App\\Providers\\AuthServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\AuthServiceProvider", "fromLink": "App/Providers/AuthServiceProvider.html", "link": "App/Providers/AuthServiceProvider.html#method_boot", "name": "App\\Providers\\AuthServiceProvider::boot", "doc": "&quot;Register any authentication \/ authorization services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/BroadcastServiceProvider.html", "name": "App\\Providers\\BroadcastServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\BroadcastServiceProvider", "fromLink": "App/Providers/BroadcastServiceProvider.html", "link": "App/Providers/BroadcastServiceProvider.html#method_boot", "name": "App\\Providers\\BroadcastServiceProvider::boot", "doc": "&quot;Bootstrap any application services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/EventServiceProvider.html", "name": "App\\Providers\\EventServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\EventServiceProvider", "fromLink": "App/Providers/EventServiceProvider.html", "link": "App/Providers/EventServiceProvider.html#method_boot", "name": "App\\Providers\\EventServiceProvider::boot", "doc": "&quot;Register any events for your application.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/RouteServiceProvider.html", "name": "App\\Providers\\RouteServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_boot", "name": "App\\Providers\\RouteServiceProvider::boot", "doc": "&quot;Define your route model bindings, pattern filters, etc.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_map", "name": "App\\Providers\\RouteServiceProvider::map", "doc": "&quot;Define the routes for the application.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_mapWebRoutes", "name": "App\\Providers\\RouteServiceProvider::mapWebRoutes", "doc": "&quot;Define the \&quot;web\&quot; routes for the application.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_mapApiRoutes", "name": "App\\Providers\\RouteServiceProvider::mapApiRoutes", "doc": "&quot;Define the \&quot;api\&quot; routes for the application.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Region.html", "name": "App\\Region", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Region", "fromLink": "App/Region.html", "link": "App/Region.html#method_locations", "name": "App\\Region::locations", "doc": "&quot;Locations.&quot;"},
                    {"type": "Method", "fromName": "App\\Region", "fromLink": "App/Region.html", "link": "App/Region.html#method_users", "name": "App\\Region::users", "doc": "&quot;Users.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/User.html", "name": "App\\User", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\User", "fromLink": "App/User.html", "link": "App/User.html#method_region", "name": "App\\User::region", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\User", "fromLink": "App/User.html", "link": "App/User.html#method_location", "name": "App\\User::location", "doc": "&quot;Get the location associated with the user.&quot;"},
                    {"type": "Method", "fromName": "App\\User", "fromLink": "App/User.html", "link": "App/User.html#method_containers", "name": "App\\User::containers", "doc": "&quot;Containers.&quot;"},
                    {"type": "Method", "fromName": "App\\User", "fromLink": "App/User.html", "link": "App/User.html#method_vehicles", "name": "App\\User::vehicles", "doc": "&quot;Vehicles.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Vehicle.html", "name": "App\\Vehicle", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Vehicle", "fromLink": "App/Vehicle.html", "link": "App/Vehicle.html#method_user", "name": "App\\Vehicle::user", "doc": "&quot;User.&quot;"},
                    {"type": "Method", "fromName": "App\\Vehicle", "fromLink": "App/Vehicle.html", "link": "App/Vehicle.html#method_type", "name": "App\\Vehicle::type", "doc": "&quot;Type.&quot;"},
                    {"type": "Method", "fromName": "App\\Vehicle", "fromLink": "App/Vehicle.html", "link": "App/Vehicle.html#method_owner", "name": "App\\Vehicle::owner", "doc": "&quot;Owner.&quot;"},
                    {"type": "Method", "fromName": "App\\Vehicle", "fromLink": "App/Vehicle.html", "link": "App/Vehicle.html#method_insurers", "name": "App\\Vehicle::insurers", "doc": "&quot;Insurers.&quot;"},
                    {"type": "Method", "fromName": "App\\Vehicle", "fromLink": "App/Vehicle.html", "link": "App/Vehicle.html#method_containers", "name": "App\\Vehicle::containers", "doc": "&quot;Containers.&quot;"},
                    {"type": "Method", "fromName": "App\\Vehicle", "fromLink": "App/Vehicle.html", "link": "App/Vehicle.html#method_codigo", "name": "App\\Vehicle::codigo", "doc": "&quot;Codi.&quot;"},
                    {"type": "Method", "fromName": "App\\Vehicle", "fromLink": "App/Vehicle.html", "link": "App/Vehicle.html#method_createTextImage", "name": "App\\Vehicle::createTextImage", "doc": "&quot;createTextImage\ncreateTextImage.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/VehicleInsurer.html", "name": "App\\VehicleInsurer", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\VehicleInsurer", "fromLink": "App/VehicleInsurer.html", "link": "App/VehicleInsurer.html#method_vehicle", "name": "App\\VehicleInsurer::vehicle", "doc": "&quot;Vehicle.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/VehicleOwner.html", "name": "App\\VehicleOwner", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\VehicleOwner", "fromLink": "App/VehicleOwner.html", "link": "App/VehicleOwner.html#method_vehicles", "name": "App\\VehicleOwner::vehicles", "doc": "&quot;Vehicles.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/VehicleType.html", "name": "App\\VehicleType", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\VehicleType", "fromLink": "App/VehicleType.html", "link": "App/VehicleType.html#method_vehicles", "name": "App\\VehicleType::vehicles", "doc": "&quot;Vehicles.&quot;"},
            
            {"type": "Class",  "link": "CreateContainerMaterialTable.html", "name": "CreateContainerMaterialTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateContainerMaterialTable", "fromLink": "CreateContainerMaterialTable.html", "link": "CreateContainerMaterialTable.html#method_up", "name": "CreateContainerMaterialTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateContainerMaterialTable", "fromLink": "CreateContainerMaterialTable.html", "link": "CreateContainerMaterialTable.html#method_down", "name": "CreateContainerMaterialTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateContainerNamesTable.html", "name": "CreateContainerNamesTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateContainerNamesTable", "fromLink": "CreateContainerNamesTable.html", "link": "CreateContainerNamesTable.html#method_up", "name": "CreateContainerNamesTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateContainerNamesTable", "fromLink": "CreateContainerNamesTable.html", "link": "CreateContainerNamesTable.html#method_down", "name": "CreateContainerNamesTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateContainersTable.html", "name": "CreateContainersTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateContainersTable", "fromLink": "CreateContainersTable.html", "link": "CreateContainersTable.html#method_up", "name": "CreateContainersTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateContainersTable", "fromLink": "CreateContainersTable.html", "link": "CreateContainersTable.html#method_down", "name": "CreateContainersTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateLocationsTable.html", "name": "CreateLocationsTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateLocationsTable", "fromLink": "CreateLocationsTable.html", "link": "CreateLocationsTable.html#method_up", "name": "CreateLocationsTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateLocationsTable", "fromLink": "CreateLocationsTable.html", "link": "CreateLocationsTable.html#method_down", "name": "CreateLocationsTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateMaterialsTable.html", "name": "CreateMaterialsTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateMaterialsTable", "fromLink": "CreateMaterialsTable.html", "link": "CreateMaterialsTable.html#method_up", "name": "CreateMaterialsTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateMaterialsTable", "fromLink": "CreateMaterialsTable.html", "link": "CreateMaterialsTable.html#method_down", "name": "CreateMaterialsTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreatePasswordResetsTable.html", "name": "CreatePasswordResetsTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreatePasswordResetsTable", "fromLink": "CreatePasswordResetsTable.html", "link": "CreatePasswordResetsTable.html#method_up", "name": "CreatePasswordResetsTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreatePasswordResetsTable", "fromLink": "CreatePasswordResetsTable.html", "link": "CreatePasswordResetsTable.html#method_down", "name": "CreatePasswordResetsTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateRegionsTable.html", "name": "CreateRegionsTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateRegionsTable", "fromLink": "CreateRegionsTable.html", "link": "CreateRegionsTable.html#method_up", "name": "CreateRegionsTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateRegionsTable", "fromLink": "CreateRegionsTable.html", "link": "CreateRegionsTable.html#method_down", "name": "CreateRegionsTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateUsersTable.html", "name": "CreateUsersTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateUsersTable", "fromLink": "CreateUsersTable.html", "link": "CreateUsersTable.html#method_up", "name": "CreateUsersTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateUsersTable", "fromLink": "CreateUsersTable.html", "link": "CreateUsersTable.html#method_down", "name": "CreateUsersTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateVehicleInsurersTable.html", "name": "CreateVehicleInsurersTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateVehicleInsurersTable", "fromLink": "CreateVehicleInsurersTable.html", "link": "CreateVehicleInsurersTable.html#method_up", "name": "CreateVehicleInsurersTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateVehicleInsurersTable", "fromLink": "CreateVehicleInsurersTable.html", "link": "CreateVehicleInsurersTable.html#method_down", "name": "CreateVehicleInsurersTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateVehicleOwnersTable.html", "name": "CreateVehicleOwnersTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateVehicleOwnersTable", "fromLink": "CreateVehicleOwnersTable.html", "link": "CreateVehicleOwnersTable.html#method_up", "name": "CreateVehicleOwnersTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateVehicleOwnersTable", "fromLink": "CreateVehicleOwnersTable.html", "link": "CreateVehicleOwnersTable.html#method_down", "name": "CreateVehicleOwnersTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateVehicleTypesTable.html", "name": "CreateVehicleTypesTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateVehicleTypesTable", "fromLink": "CreateVehicleTypesTable.html", "link": "CreateVehicleTypesTable.html#method_up", "name": "CreateVehicleTypesTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateVehicleTypesTable", "fromLink": "CreateVehicleTypesTable.html", "link": "CreateVehicleTypesTable.html#method_down", "name": "CreateVehicleTypesTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "CreateVehiclesTable.html", "name": "CreateVehiclesTable", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "CreateVehiclesTable", "fromLink": "CreateVehiclesTable.html", "link": "CreateVehiclesTable.html#method_up", "name": "CreateVehiclesTable::up", "doc": "&quot;Run the migrations.&quot;"},
                    {"type": "Method", "fromName": "CreateVehiclesTable", "fromLink": "CreateVehiclesTable.html", "link": "CreateVehiclesTable.html#method_down", "name": "CreateVehiclesTable::down", "doc": "&quot;Reverse the migrations.&quot;"},
            
            {"type": "Class",  "link": "DatabaseSeeder.html", "name": "DatabaseSeeder", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "DatabaseSeeder", "fromLink": "DatabaseSeeder.html", "link": "DatabaseSeeder.html#method_run", "name": "DatabaseSeeder::run", "doc": "&quot;Seed the application&#039;s database.&quot;"},
            
            {"type": "Class", "fromName": "Tests\\Browser", "fromLink": "Tests/Browser.html", "link": "Tests/Browser/ExampleTest.html", "name": "Tests\\Browser\\ExampleTest", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tests\\Browser\\ExampleTest", "fromLink": "Tests/Browser/ExampleTest.html", "link": "Tests/Browser/ExampleTest.html#method_testBasicExample", "name": "Tests\\Browser\\ExampleTest::testBasicExample", "doc": "&quot;A basic browser test example.&quot;"},
            
            {"type": "Class", "fromName": "Tests\\Browser", "fromLink": "Tests/Browser.html", "link": "Tests/Browser/LoginTest.html", "name": "Tests\\Browser\\LoginTest", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tests\\Browser\\LoginTest", "fromLink": "Tests/Browser/LoginTest.html", "link": "Tests/Browser/LoginTest.html#method_testExample", "name": "Tests\\Browser\\LoginTest::testExample", "doc": "&quot;A Dusk test example.&quot;"},
            
            {"type": "Class", "fromName": "Tests\\Browser\\Pages", "fromLink": "Tests/Browser/Pages.html", "link": "Tests/Browser/Pages/HomePage.html", "name": "Tests\\Browser\\Pages\\HomePage", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tests\\Browser\\Pages\\HomePage", "fromLink": "Tests/Browser/Pages/HomePage.html", "link": "Tests/Browser/Pages/HomePage.html#method_url", "name": "Tests\\Browser\\Pages\\HomePage::url", "doc": "&quot;Get the URL for the page.&quot;"},
                    {"type": "Method", "fromName": "Tests\\Browser\\Pages\\HomePage", "fromLink": "Tests/Browser/Pages/HomePage.html", "link": "Tests/Browser/Pages/HomePage.html#method_assert", "name": "Tests\\Browser\\Pages\\HomePage::assert", "doc": "&quot;Assert that the browser is on the page.&quot;"},
                    {"type": "Method", "fromName": "Tests\\Browser\\Pages\\HomePage", "fromLink": "Tests/Browser/Pages/HomePage.html", "link": "Tests/Browser/Pages/HomePage.html#method_elements", "name": "Tests\\Browser\\Pages\\HomePage::elements", "doc": "&quot;Get the element shortcuts for the page.&quot;"},
            
            {"type": "Class", "fromName": "Tests\\Browser\\Pages", "fromLink": "Tests/Browser/Pages.html", "link": "Tests/Browser/Pages/Page.html", "name": "Tests\\Browser\\Pages\\Page", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tests\\Browser\\Pages\\Page", "fromLink": "Tests/Browser/Pages/Page.html", "link": "Tests/Browser/Pages/Page.html#method_siteElements", "name": "Tests\\Browser\\Pages\\Page::siteElements", "doc": "&quot;Get the global element shortcuts for the site.&quot;"},
            
            {"type": "Trait", "fromName": "Tests", "fromLink": "Tests.html", "link": "Tests/CreatesApplication.html", "name": "Tests\\CreatesApplication", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tests\\CreatesApplication", "fromLink": "Tests/CreatesApplication.html", "link": "Tests/CreatesApplication.html#method_createApplication", "name": "Tests\\CreatesApplication::createApplication", "doc": "&quot;Creates the application.&quot;"},
            
            {"type": "Class", "fromName": "Tests", "fromLink": "Tests.html", "link": "Tests/DuskTestCase.html", "name": "Tests\\DuskTestCase", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tests\\DuskTestCase", "fromLink": "Tests/DuskTestCase.html", "link": "Tests/DuskTestCase.html#method_prepare", "name": "Tests\\DuskTestCase::prepare", "doc": "&quot;Prepare for Dusk test execution.&quot;"},
                    {"type": "Method", "fromName": "Tests\\DuskTestCase", "fromLink": "Tests/DuskTestCase.html", "link": "Tests/DuskTestCase.html#method_driver", "name": "Tests\\DuskTestCase::driver", "doc": "&quot;Create the RemoteWebDriver instance.&quot;"},
            
            {"type": "Class", "fromName": "Tests\\Feature", "fromLink": "Tests/Feature.html", "link": "Tests/Feature/ExampleTest.html", "name": "Tests\\Feature\\ExampleTest", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tests\\Feature\\ExampleTest", "fromLink": "Tests/Feature/ExampleTest.html", "link": "Tests/Feature/ExampleTest.html#method_testBasicTest", "name": "Tests\\Feature\\ExampleTest::testBasicTest", "doc": "&quot;A basic test example.&quot;"},
            
            {"type": "Class", "fromName": "Tests", "fromLink": "Tests.html", "link": "Tests/TestCase.html", "name": "Tests\\TestCase", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "Tests\\Unit", "fromLink": "Tests/Unit.html", "link": "Tests/Unit/ExampleTest.html", "name": "Tests\\Unit\\ExampleTest", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tests\\Unit\\ExampleTest", "fromLink": "Tests/Unit/ExampleTest.html", "link": "Tests/Unit/ExampleTest.html#method_testBasicTest", "name": "Tests\\Unit\\ExampleTest::testBasicTest", "doc": "&quot;A basic test example.&quot;"},
            
            {"type": "Class", "fromName": "Tests\\Unit", "fromLink": "Tests/Unit.html", "link": "Tests/Unit/LoginTest.html", "name": "Tests\\Unit\\LoginTest", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tests\\Unit\\LoginTest", "fromLink": "Tests/Unit/LoginTest.html", "link": "Tests/Unit/LoginTest.html#method_testLogin", "name": "Tests\\Unit\\LoginTest::testLogin", "doc": "&quot;A basic test example.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});



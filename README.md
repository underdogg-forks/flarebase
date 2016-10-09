# Laravel Enterprise Starter Kit (LESK)

## Installing

### Clone a copy
`git clone` (this repository)

```
`git clone` (this repository)
```

### Fetch dependencies

#### Composer
For a development environment use:
```
composer install
```

For a production environment use:
```
composer install --no-dev
```

#### Node.js
Fetch all dependencies for Node.js using *npm* by using the following command:

```
npm install
```

### Basic configuration

#### Create your *.env* file

For a Development environment use:
```
cp .env.example-dev .env
```

For a other environments, such as QA and Production use:
```
cp .env.example-qa .env
```


### Basic configuration

#### Generate application key
Generate the unique application key:
````
./artisan key:generate
````

#### Grant permissions to some directories. 
Either grant permission to all staff, or just to the Web Server user by making it a member of the group that owns these folders.
````
chmod -R ugo+rw storage/
chmod -R ugo+rw bootstrap/cache/
````


### Migration

To run the migration scripts run this command
 ```
 ./artisan migrate
 ```
 
 To seed the database run the command below, note that in the development environment a few extra user and permissions
 are created.
 ```
 ./artisan db:seed
 ```

### First login and test
You should now be able to launch a Web browser and see your new Web application. To log in using the *root* account
the default password is *Password1*. Please change it ASAP.


## Configuration

### Authentication & Authorization
During the installation the database seeder scripts created a few things to help get started:

* The super user *root*.
* The roles *admins* and *staff*.
* The permissions *basic-authenticated*, *guest-only* & *open-to-all*.



### Menu system
The menus system can be configured with the menu editor included in the administration section under the security group.
To edit an existing menu item simply click on it in the menu tree on the left, and edit the entry details, on the right, 
once loaded. Edit the entry then click on the *Save* button.
To delete an existing menu item simply select it on the menu tree, then once loaded click on the *Delete* button.
To create a new menu item, first click on the *Clear* button, if you previously had an existing menu entry selected, 
then fill in the form details following these guidelines:

* *Name*: The internal and unique name used as a reference. Required field.
* *Label*: The label shown to the staff.
* *Position*: A number used to sort the menu item amongst it siblings. In the event that two items have the same 
position value the items are sorted alphabetically. The position numbers do not have to be sequential, gaps in the 
numbering can created to allow for future insertion, or to ensure that an item or branch is placed last, as is the 
case of the ``Admin`` branch.
* *Icon*: The class of a Font-Awesome icon, with the optional colour qualifier. For example ``fa fa-bolt`` or 
``fa fa-warning fa-colour-orange``
* *Separator*: Checkbox that indicates if this item is to be a separator. When enabled, the label is not shown so a 
good label to use is a few dashes (ie: "----"). Also the item when rendered will not have a URL.
* *URL*: The URL field is best used to create an menu entry pointing to an external resource, otherwise when rendered
the URL should be generated from the associated *Route*.
* *Enabled*: Allows to enable or disable any entry. Any disabled entry will not be rendered. Useful to temporally 
disable an entire branch.
* *Parent*: List all other menu entries, except separators, to select, as the name indicates the parent of the current 
entry. This allows setting the hierarchy.
* *Route*: Associate the current menu entry with a Application Route. This will also give the menu entry both a URL 
and a Permission.
* *Permission*: If the item is not associated with a *Route*, a specific permission can be selected. Best used to secure
access to external resources when specified with the *URL* field.



### Themes
To change the default theme, set the *DEFAULT_THEME* variable in the *.env* file:
````
THEME.DEFAULT=red
````
LESK comes with 3 themes: default, green and red.
Both the red and green themes inherit much of their look from the default theme which is mostly blue and based on the 
look of the [almasaeed2010/AdminLTE](https://github.com/almasaeed2010/AdminLTE) Web template.
For more details on how to configure and develop your own themes refer to the documentation of the 
[yaapis/Theme](https://github.com/yaapis/Theme) package.




### Rapyd demo
To enable the demo mini sub-site that comes with [rapyd-laravel](https://github.com/zofe/rapyd-laravel) uncomment the 
following line at the end of the file *app/Http/rapyd.php*:

```
// Uncomment to enable the demo route.
Route::controller('rapyd-demo', '\Zofe\Rapyd\Demo\DemoController');
```

For more information on how to use the [Rapyd CRUD and Grid](https://github.com/zofe/rapyd-laravel) feature please refer 
to original package notes.


## Deploying to production
Before deploying to a production or live server, you should take care of a few tasks.

### Combine and minimize
Although not required, it may be helpful to combine and minimize both the CSS and JS files. Add any CSS and JS file
that you may have added to the *styles* and *scripts* command (respectively) in the *gulpfile.js* and run the 
*gulp* command with the *--production* command line parameter to trigger the minimization process, as shown 
below:

```
gulp --production
```

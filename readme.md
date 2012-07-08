A simple module for websites with static pages, it allows you to have a folder of static pages with no additional setup in the controller, and no special rules for routing. It was made and tested in Kohana 3.2.

How to use
----------
The module uses a 'default' route so you will need to make sure it is the only default route in your system.

You may also need to modify Controller_Static. By default it uses the template in 'views/template/main', and looks for static pages in 'views/static'.

When it is set up, you can add new static pages by just creating a new html view in views/static. Then later if you decide you need some variables, you can add an action to Controller_Staticplus and the system will use that action instead.
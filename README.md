# OU Libraries Web Development Project

## User Story
As a site visitor, I want to be able to view a number of images on a page as a gallery. 
I expect these images to be retrieved via the API provided and displayed in a dynamic layout that will work on mobile as well as large screens. 
I also expect the page to be accessible to visually impaired users and compatible with screen readers. 
The website should use composer to manage any dependencies needed as well as using PHP for the server side code. A starter composer file has been provided to you.   

## Acceptance Criteria
**Feature: Page with header and navigation
Scenario: Page loaded**

* When I navigate to the URL of the site
Then I see a header with the title of the page as well as the title in the browser tab
And I see two navigation items: Gallery and Contact. Gallery is selected by default
And the entire page is semantic as well as accessible to screen readers and visually impaired users.

**Feature: Gallery
Scenario: Default when page is loaded or Gallery navigation is clicked**

* When I load the page initially or click the Gallery navigation item
Then the gallery of images is loaded in the main content of the page using the provided API
And the gallery is dynamic based on screen size and looks good on mobile as well as wide screens
And the images have any special styling you would like to add for added appeal
And the number of images ranges from 25-75. The gallery can include pagination if you wish or you can take creative control on how many to display at one time and how to display any additional images. 

**Feature: Contact
Scenario: Scroll to bottom or Contact navigation item is clicked**

* When I scroll to the bottom of the page or click the Contact navigation item
Then I see the footer of the page with a number (fake), email (fake), and facebook (no page needed, just link to facebook.com) link to provide the user with means to contact the company
And the links should use the proper browser methods to activate each link according to its purpose. 


## Resources
### Photo API that is required
This project will use the "Jsonplaceholder" API to simulate retrieving images from a 3rd party API. This API will work with virtually any language, so feel free to use what you'd like. We use Javascript/Jquery in quite a few of our sites, so that would be a great choice if you are comfortable with it.  

[JSON Placeholder Guide](https://jsonplaceholder.typicode.com/guide/)

[JSON Placeholder Photos API link](https://jsonplaceholder.typicode.com/photos)

### Cloning repo
Follow these instructions to clone the starter repo to a local copy. 
1. Clone the following repo to your computer locally: https://github.com/kyledaviswx/webdev_project
2. Once completed with code and tested functionality, create a tarball of the project
   1. ```tar -cvf tarName.tar /path/to/directory```
3. Send the tarball to the hiring manager of the position you are applying for. Include any notes needed in the email to the hiring manager. 
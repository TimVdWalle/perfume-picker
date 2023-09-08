I want to build an app that fits this description:

Do you experience headaches or migraines after applying perfume? If so, you're not alone. I aim to build an app using Laravel that will enable both me and others to keep track of our experiences with different fragrances. The goal is to identify which perfumes are likely to cause headaches and migraines. Ultimately, this app will serve as a guide to finding the ideal perfume that can be worn without the risk of experiencing discomfort or pain.

The working name of the project is: PerfumePicker,
but keep working in the app namespace.
The app will be built in Laravel and will contain these features:

Login using the socialite plugin (google + apple)
Make sure that the users table has these fields to be future proof:
provider
provider_id

Ability to add a new perfume to the database
Perfume fields are these :
- brand
- name
- scent notes
- longevity: int (number of hours / nullable)
- a field that can be used to store wether the perfume is oil based or alcohol based (nullable)
- a field to store where the parfum is applied (neck, wrists, etc) Choose the best type for this field; think of some other common places on the body where perfume is applied.
- description
  add more fields if you deem necessary

Ability to log symptoms
- type of discomfort
- severity: int, 0 to 10
- datetime

Correlation analysis
Analyze the data to find any correlation between specific perfumes and headaches to find out which perfume are likely to cause discomfort and which perfume is a candidate to be worn without causing discomfort

Recommendation engine
Suggest perfumes that have lower incidence rates of causing headaches.
Make the distinction between collective data and personal data, because different person can have different headache triggering perfumes.

Preferred tech stack:
Laravel for backend
Laravel blade view for frontend
mysql
Tailwind css
Vite (without vue.js)

Tailwindcss and vite will be installed by myself, because their versions are later than your knowledge pool.

Notes on the database structure:
No foreign key between symptom and perfume: because a possible relationship between those 2 should be discovered by the recommendation engine, and should not be set in stone when the perfume and symptoms are entered in to the system: we want do discover the correlations.
Also, keep in mind that there will be 2 kinds of users: normal users (who can add perfume and symptoms) and admins (who will have more rights, to be determined later)

Add foreign keys, with on cascade delete, where necessary. For instance user_id on perfumes and symptoms.

Remember these feature requests because I will be asking you step-by-step questions to build the app.

The project should start with these controllers:
AuthController (login, redirect to provider, callback from provider)
DashboardController
PerfumeController
SymptomController

****************************************************************************************************

Give me the detailed instructions and terminal commands to setup the project.
Installation of vite and tailwind will be done by myself.

****************************************************************************************************

Update the routes file to not use strings but class where possible.

****************************************************************************************************

Now, create a layout file that uses tailwind that can be used as master layout file for all the other blade files.
Replace the html of the welcome page with a beautiful page that explains what this website is about. It is the page that first-time users should see and users that are nog logged in.
Add the necessary call-to-actions to this page.

First, choose a color palette for the web app. I will enter those colors in the tailwindcss configuration. No need to tell me how to that one particular thing

****************************************************************************************************

Update the welcome blade with more content. What content blocks do you deem appropriate to display on the homepage ?

****************************************************************************************************

write texts for these pages and give the blade contents:
about us
privacy policy
terms and conditions

****************************************************************************************************

Give me instructions and updated files so that the links work.

****************************************************************************************************

These are the tailwind theme colors:
colors: {
'transparent': 'transparent',
'mint': '#6EE7B7',
'lightblue': '#3B82F6',
'darkblue': '#1f48ff',
'lightgrey': '#F3F4F6',
'darkgrey': '#1F2937',
'red': '#EF4444',
},

From now on, use those colors;
Darkblue and for titles
Mint for heading backgrounds
Be creative and use the colors wherever you like, but be consistent: FROM NOW ON, please.

****************************************************************************************************

Now, in the same layout and colors as we have started: create a login page.
On that page, the user should be able to select its way of logging in: google of apple.
Remember that we want to use the socialite plugin.

****************************************************************************************************

Update the routes and methods in AuthController to make provider not hardcoded, please.

****************************************************************************************************

Make the route for login work. Now it gives the error:
Method App\Http\Controllers\AuthController::showLogin does not exist
Maybe also give it a better name?

****************************************************************************************************

Now fix this error:
Method App\Http\Controllers\AuthController::showLogin does not exist

****************************************************************************************************

Explain to me how to setup google socialite:
Explain how to get the app key and secret from google.
Give the code for AuthController to handle google login

****************************************************************************************************

When using the socialite plugin to login using google, we get this error:
SQLSTATE[HY000]: General error: 1364 Field 'password' doesn't have a default value

****************************************************************************************************

What should be on the dashboard page?
Present some suggestions

****************************************************************************************************


****************************************************************************************************


****************************************************************************************************


****************************************************************************************************


****************************************************************************************************


****************************************************************************************************


****************************************************************************************************


****************************************************************************************************


****************************************************************************************************


****************************************************************************************************


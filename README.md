[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Telegraph/functions?utm_source=RapidAPIGitHub_TelegraphFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Telegraph Package
Telegra.ph is a minimalist publishing tool that allows you to create richly formatted posts and push them to the Web in just a click.
* Domain: [Telegraph](http://telegra.ph/)
* Credentials: accessToken

## How to get credentials: 
0. To get your accessToken please use createAccount block



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Telegraph.createAccount
Use this method to create a new Telegraph account.

| Field     | Type  | Description
|-----------|-------|----------
| shortName | String| Account name, helps users with several accounts remember which they are currently using.
| authorName| String| Default author name used when creating new articles.
| authorUrl | String| Default profile link, opened when users click on the author's name below the title. Can be any link, not necessarily to a Telegram profile or channel.

## Telegraph.editAccountInfo
Use this method to update information about a Telegraph account. Pass only the parameters that you want to edit.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token of the Telegraph account.
| shortName  | String| New account name, helps users with several accounts remember which they are currently using.
| authorName | String| New author name used when creating new articles.
| authorUrl  | String| New profile link, opened when users click on the author's name below the title. Can be any link, not necessarily to a Telegram profile or channel.

## Telegraph.getAccountInfo
Use this method to get information about a Telegraph account. Returns an Account object on success.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token of the Telegraph account.
| fields     | List  | List of account fields to return. Available fields: short_name, author_name, author_url, auth_url, page_count.

## Telegraph.revokeAccessToken
Use this method to revoke access_token and generate a new one

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token of the Telegraph account.

## Telegraph.createPage
Use this method to create a new Telegraph page.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access token of the Telegraph account.
| title        | String| Page title.
| authorName   | String| Author name, displayed below the article's title.
| authorUrl    | String| Profile link, opened when users click on the author's name below the title. Can be any link, not necessarily to a Telegram profile or channel.
| content      | List  | Content of the page.
| returnContent| Select| If true, a content field will be returned in the Page object

## Telegraph.editPage
Use this method to edit Telegraph page.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Access token of the Telegraph account.
| path         | String| Path to the page.
| title        | String| Page title.
| authorName   | String| Author name, displayed below the article's title.
| authorUrl    | String| Profile link, opened when users click on the author's name below the title. Can be any link, not necessarily to a Telegram profile or channel.
| content      | List  | Content of the page.
| returnContent| Select| If true, a content field will be returned in the Page object

## Telegraph.getPage
Use this method to get a Telegraph page.

| Field        | Type  | Description
|--------------|-------|----------
| path         | String| Path to the page.
| returnContent| Select| If true, a content field will be returned in the Page object

## Telegraph.getPageList
Use this method to get a list of pages belonging to a Telegraph account. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token of the Telegraph account.
| limit      | Number| Limits the number of pages to be retrieved.
| offset     | Number| Sequential number of the first page to be returned.

## Telegraph.getViews
Use this method to get the number of views for a Telegraph article. 

| Field| Type  | Description
|------|-------|----------
| path | String| Path to the Telegraph page (in the format Title-12-31, where 12 is the month and 31 the day the article was first published).
| year | Number| If passed, the number of page views for the requested year will be returned.
| month| Number|  If passed, the number of page views for the requested month will be returned.
| day  | Number|  If passed, the number of page views for the requested day will be returned.
| hour | Number|  If passed, the number of page views for the requested hour will be returned.


# new-site
A default set of htaccess rules, page, and styles I like to start new websites off with

## Install
1. Upload the index.php, htaccess.txt and error directory on a new site
2. Rename htaccess.txt to .htaccess
3. Optional for CORS: Find the CORS section of the htacess file, uncomment it, and change the domains to reflect your own
4. Optional for HTTPS: if you have HTTPS then uncomment the STRICT TRANSPORT SECURITY code and FORCE HTTPS code

## What this includes:
### Default landing page
Shows Snow White in a snow storm. To edit what shows up on the default landing page (it is a placeholder really) just edit the errors/error.php document under the if isStatus(200) branch.
The default landing page (index.php) can be used in any directory you need a placeholder.
Be sure to update the links on the bottom otherwise they redirect to my site. You can remove them or place a link to a home page or other page you'd like to send people to.

### Error Functionality
Deciding what errors send the visitor to the errors.php page depends on what you put in the Errors section of htaccess. I placed a few common 400 errors in there to get you started.
To edit what displays on each error then edit the errors/error.php document. You'll see if branches for each code. If you want to add more codes just create a new if branch.

### HTACCESS
Check out the HTACCESS file to see what it all includes. 

NOTE: If you HAVE HTTPS then uncomment the STRICT TRANSPORT SECURITY and FORCE HTTPS lines.
These are commented out so that it doesn't hose your browser into thinking you have https.

Here's just a sample:

1. Turn off server signature
2. Do not show directory listing (for directories that don't have a default or index file)
3. Strict Transport Security - to tell the browser to only connect via https (if you don't have https then comment this out!)
4. Force HTTPS
5. Error documents
6. Deny access to protected server files and folders
7. CORS headers
8. Compression for common files

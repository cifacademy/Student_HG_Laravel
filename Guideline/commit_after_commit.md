# Commit after Commit

1. Make any change after push your first change in your PR

2. Move your change to staging index using

   ```bash
   git add .
   ```

3. Squash your last commit using 

    ```bash
    git commit --amend
    ```

    This will bring up your last commit details in your vscode window and ask you to review your last commit details.

4. Edit your last commit details.
   
   > Since you have been running the `git config --global core.editor "code --wait"` you will automatically use vscode as the default code editor for the popup process.

   You can edit commit detials such : 
   * commit message
   * commit files list (you can define new file to commit or eleminate file for commit)
  
   Take a look at this preview :

   **Before editing :**
   
   You can see that my last commit message is `create How to review a pull request from member at first run markdown file`. I want to change this message to be more relevant with my last change about `Commit After Commit Guideline`.

   ![alt](https://i.postimg.cc/0jz6PrGL/image.png)
   
   The commit message in my pull request
   
   ![alt](https://i.postimg.cc/sXqWBp2V/image.png)

   **After editing :**
   
   Here I changed my last commit message to `Adding Commit After Commit Guideline` as seen below.

   ![alt](https://i.postimg.cc/MTTHmXLv/image.png)

   The commit message in my pull request after editing
   
   ![alt](https://i.postimg.cc/SQ92TYsM/image.png)

5. Close the popup windows in vscode after editing the commit details.

6. Come back to your console or terminal and push force your change:

    ```bash
    git push -f
    ```

7. Repeat step 1 to 6 if you still have any change in your existing PR.

8. If you finish with your PR and start new PR please follow the [Firt time contribution guideline](#firt-time-contribution-first-commit)

# Start your first time contribution

1. Always check your current status with `git status`
   
2. Make sure now you were in `main` or `master` branch.
   
3. Make sure your `main` or `master` branch already updated. Kindly use this command to update your `main` or `master`.
   
    ```bash
    git pull --rebase origin main
    ```

    > Get a conflict after rebasing your current branch with the `main` remote branch? Please, follow the [How to handle conflict after rebasing](#how-to-handle-conflict-after-rebasing) guideline!
   
4. Open the repository folder with [vscode](https://code.visualstudio.com/download) or your text editor

    ```bash
    # vscode
    # open terminal or command prompt on the repository folder then run this command

    code .
    ```
   
5. Make new working branch from main
   
    ```bash
    git branch <new_branch_name>
    ```
    ### **Please, follow our branch naming instruction bellow :**
    
    The branch name contains at least 3 elements, `initials or developer nickname`, `feature name`, and `branch status`.

    Example : 
    
    `initialDevName_featureName_branchStatus`

    **We have at least 6 branch status as follow :**
    
    * For ceating a new product or feature :
        ```bash
        # new branch name format
        initialDevName_featureName_product
        
        # example
        git branch MCM_logingPage_product
        ```
    * For bug fixing :
        ```bash
        # new branch name format
        initialDevName_featureName_fix
        
        # example
        git branch MCM_logingPage_fix
        ```
    * To isolate bug or problem :
        ```bash
        # new branch name format
        initialDevName_featureName_isolate
        initialDevName_featureName_bug # old
        
        # example
        git branch MCM_logingPage_isolate
        git branch MCM_logingPage_bug # old
        ```
    * To enhance the existing product or feature :
        ```bash
        # new branch name format
        initialDevName_featureName_enhance
        
        # example
        git branch MCM_logingPage_enhance
        ```
    * For creating or updating documentation :
        ```bash
        # new branch name format
        initialDevName_featureName_doc
        
        # example
        git branch MCM_logingPage_doc
        ```
    * For creating or updating guideline :
        ```bash
        # new branch name format
        initialDevName_featureName_guide
        
        # example
        git branch MCM_logingPage_guide
        ```

6. Checkout to your working branch

   ```bash   
   git checkout <your_branch_name>
   ```

7. Start make contribution (create something, update something, etc)

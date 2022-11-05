# How to delete working branch

To issue the command to delete a Git branch, follow these steps:

1. Open a Git BASH window or Command Window in the root of your Git repository

2. If necessary, use the `git switch` or `git checkout` command to move off the branch you wish to delete

3. Find the branch name using `git branch`

4. Delete local branch with this command bellow : *Make sure your `<branchName>` is correct*
   
    ## Ways to Delete a Local Git Branch

    In order to delete a local Git branch, you need to provide the `--delete` or `-d` flag to the git branch command (the latter is simply an alias to `--delete`).

    > `-d` `--delete`: Delete a branch. The branch must be fully merged in its upstream branch, or in HEAD if no upstream was set with --track or --set-upstream-to.

    ### Example 1: (using `--delete`)'

    ```markdown
    git branch --delete <branchName>
    ```

    ### Example 2: (using `-d`)
    
   ```markdown
   git branch -d <branchName>
   ```
    
    > Alternatively, you can also use the `-D` flag which is a shortcut for `--delete --force`. In other words with the `-D` flag, the specified branch will be deleted regardless of its merged status.

    ### Example 3: (using `-D`)

   ```markdown
   git branch -D <branchName>
   ```

    ## Ways to Delete a Remote Git Branch
    
    Now if you want to get rid of a remote branch that resides on the remote host (server), you need to perform a git push. Prior to [Git v1.7.0](https://github.com/gitster/git/blob/master/Documentation/RelNotes/1.7.0.txt#L154), you could delete a remote branch using the syntax `git push <remoteName> :<branchName>`. 
    
    For example,

   ```markdown
   git push origin :<branchName>
   ```

    After deleting the remote branch, you should always also delete the local branch as well like this:

   ```markdown
   git branch -d <branchName>
   ```

    > **Important Notes:** To ensure that all machines are now in-sync and the branch that has already been deleted from the remote host is not still visible to them, you need to run:

   ```markdown
   git fetch --all --prune
   ```

    You can find more details about the commands in the help pages of the git branch:

   ```markdown
   git branch --help
   ```

5. Run the `git branch -a` command to verify the local Git branch is deleted.

    `red` is deleted branch, `green` is your working active branch, `white` is present and inactive branch.

    [![alt](https://i.postimg.cc/hPqvVsLy/image.png)](https://postimg.cc/8stTShnM)

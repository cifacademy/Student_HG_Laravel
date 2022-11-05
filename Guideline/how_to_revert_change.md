# How to revert change

Sometimes you might be wanna reset your local change for some cases. Here I already make some steps to do it. Please follow the step to keep safe.

1. Find the hash id of the commit you want to revert using the following git command:
   
  ```bash
  git reflog
  ```

   For example `git reflog` will result a list of hash id changes in your terminal :

```ruby
    db5dca9 (HEAD -> MCM_firstRunDoc_guide, origin/MCM_firstRunDoc_guide) HEAD@{0}: commit (amend): Adding how to handle conflict after rebasing Guideline
    2fdb6c2 HEAD@{1}: commit (amend): Adding Commit After Commit Guideline
    365702f HEAD@{2}: rebase (continue) (finish): returning to refs/heads/MCM_firstRunDoc_guide
    365702f HEAD@{3}: rebase (continue): Adding Commit After Commit Guideline
    4932459 (origin/main, origin/HEAD) HEAD@{4}: pull --rebase origin main (start): checkout 493245994a8adee520c7055df2da205e9c693086
    f0f6b67 HEAD@{5}: commit (amend): Adding Commit After Commit Guideline
    6e8c963 HEAD@{6}: reset: moving to 6e8c963
    3816a56 HEAD@{7}: commit (amend): Adding Commit After Commit Guideline
    00449d5 HEAD@{8}: rebase (continue) (finish): returning to refs/heads/MCM_firstRunDoc_guide
    00449d5 HEAD@{9}: rebase (continue): Adding Commit After Commit Guideline
    4932459 (origin/main, origin/HEAD) HEAD@{10}: pull --rebase origin main (start): checkout 493245994a8adee520c7055df2da205e9c693086
    6e8c963 HEAD@{11}: commit (amend): Adding Commit After Commit Guideline
```
   Now my current HEAD was in `db5dca9`. I want to revert to `6e8c963` or `HEAD@{11}`

2. For hard reset you could use the command bellow : **REMEMBER YOU MUST BE CAREFUL WITH HARD RESET BECAUSE YOUR CHANGE WILL ERASE PERMANENTLY**
    
    ```bash
    
    git reset --hard 6e8c963
    
    # or

    git reset --hard HEAD@{11}

    ```

3. For soft reset you could use the command bellow : 
    
    ```bash
    
    git reset --soft 6e8c963
    
    # or

    git reset --soft HEAD@{11}

    ```

4. Don't forget to give commit message after revert to avoid any mistake. 

    ```bash
    git commit -m "Reverting to the state of the project at 6e8c963 Because missing something"
    ```

5. CONGRATULATION! you did it correctly. Now you can continue your work.


<!-- [![image.png](https://i.postimg.cc/tTXyqfpV/image.png)](https://postimg.cc/zLP4pxLJ) -->
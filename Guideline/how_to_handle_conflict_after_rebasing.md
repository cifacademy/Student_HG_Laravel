# How to handle conflict after rebasing

Do you have a conflict problem after rebasing your working branch from the remote main branch?
Let's fix it.

I understand sometimes you might miss something when you working on your task. Or when we work together our tasks might be crowded and messy. Sometimes tech team might have a conflict after running `git pull --rebase origin main`

## Follow this step to fix it!

1. Fix the conflict file and choose where is the correct one. **MAKE SURE YOU HAVE CHOOSE THE CORRECT ONE AT THE CONFLICT MERGE FILE**
   
2. After your already sure that the conflict file was handled correctly. Then, move your change to staging index using

    ```bash
    git add .
    ```
3. Run the following git command to continue your work

    ```bash
    git rebase --continue
    ```

4. Push your change in your remote working branch using this command

    ```bash
    git push -f
    ```

5. CONGRATULATION! Now you can continue your work with the [Commit after Commit](commit_after_commit.md#commit-after-commit)


<!-- 
DRAFT IMAGE DOCUMENTATION
[![image.png](https://i.postimg.cc/DZ4Wvr8k/image.png)](https://postimg.cc/JDm7KBNP)
[![image.png](https://i.postimg.cc/nhs4NJTL/image.png)](https://postimg.cc/DST4bR9V)
[![image.png](https://i.postimg.cc/qqB9cLnW/image.png)](https://postimg.cc/TLS7fntc)
[![image.png](https://i.postimg.cc/sXxYpGxw/image.png)](https://postimg.cc/r06RTmSr)
[![image.png](https://i.postimg.cc/tTFxddyd/image.png)](https://postimg.cc/S2NRkMnj)
[![image.png](https://i.postimg.cc/jSCn3YtS/image.png)](https://postimg.cc/3k5wW6ks)
[![image.png](https://i.postimg.cc/L6Qn1QLK/image.png)](https://postimg.cc/nC7F8k30)
[![image.png](https://i.postimg.cc/XJgv7s4P/image.png)](https://postimg.cc/S2J4g7XL)
[![image.png](https://i.postimg.cc/5NQMssDM/image.png)](https://postimg.cc/tYbfTNXr)
[![image.png](https://i.postimg.cc/4y5wPRZ1/image.png)](https://postimg.cc/fSVxWFV3)
[![image.png](https://i.postimg.cc/MKnjd8WK/image.png)](https://postimg.cc/RNzFZy6j)
[![image.png](https://i.postimg.cc/xd5C9s04/image.png)](https://postimg.cc/yJJBPy3m)
[![image.png](https://i.postimg.cc/xCWqZXjf/image.png)](https://postimg.cc/njGHjcQg)
[![image.png](https://i.postimg.cc/Y2ndvknp/image.png)](https://postimg.cc/fkdcF4QF) -->
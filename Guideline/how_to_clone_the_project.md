# How to clone the project

1. Accecpt the GitHub invitation from your lead
   
2. Download and install git [here](https://git-scm.com/downloads)
   
3. Open `command prompt` or `terminal` in the repository folder
   
4. Clone the repository in your local machine

    ```bash
    git clone  <repository https or ssh link>
    ```

5. Open the repository folder on your local machine
   
6. Open `command prompt` or `terminal` in the repository folder
   
7. Run the GitHub command bellow in your 

    ```bash
    git status
    git config --global user.name "Your name here"
    git config --global user.email "your_email@example.com"

    # additional command
    git config --global color.ui true

    # makes sure that Git output is colored
    git config --global color.ui auto

    # displays the original state in a conflict
    git config --global merge.conflictstyle diff3

    # Associating VSCode editor with Git 
    git config --global core.editor "code --wait"
    ```

8. Now you are ready to make contribution with us

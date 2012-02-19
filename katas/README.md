# Kata Solutions #

The kata solutions can be added directly by downloading the code, adding the folder solution with your name and submiting again the code with your kata. Or by adding the solutions as a git submodule.

## Adding it as a git submodule ##

To adding your kata solution as a git submodule, first create a repository in your account and commit all the codeto that repository.

Next, clone this repo and run the following commands

```sh
$ git submodule add git://github.com/YourName/YourRepoName.git katas/your-name
```

## Cloning the submodules already present ##

A git submodule is a git repo living inside your repo. To initialize the already present submodules run this from the root of the repo

```sh
$ git submodule init
```

#Engine

A Fuel PHP setup by Proximity BBDO

## Installation

The repo links to the official FuelPHP submodules, to clone the full repo:
    git clone --recursive git@github.com:proximitybbdo/engine.git

**Important**: the `--recursive` flag is mandatory to get all the submodules!

Alternatively, you can just `git clone` the repo and perform:

    git submodule init
    git submodule update

## Updating submodules to other stable branches

1. `cd` into the submodule
2. `git pull` to retreive all missing branches and tags
3. `git branch -a` to view all branches that just got pulled in
4. `git checkout BRANCHNAME / version`
5. `git status` to compare tags on github
6. `git pull`
7. the files are now updated
8. `cd` to the root
9. `git push` it to engine
10. then the commit tag from our submodule should point out to the right commit on their repo

**!!!Note that only our submodules are updated with this approach,make sure we don't miss anything in the app and other not submoduled folders of fuel!!!**


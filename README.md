# learn-git

#### 1. Config username, email
![image](https://user-images.githubusercontent.com/100080625/176153575-15655589-7d27-489c-857b-43ef2b2fccfc.png)

#### 2. Checkout develop
      git checkout -B develop

#### 3. Gitignore
      Create demo.log, index.html
![image](https://user-images.githubusercontent.com/100080625/176155736-76bd9147-d62b-4bd7-bec1-b424cbe06014.png)

      Ignore all log file
![image](https://user-images.githubusercontent.com/100080625/176155916-25df7efe-7a4f-412a-ac97-1c02fe16e7df.png)

      Commit and push
![image](https://user-images.githubusercontent.com/100080625/176156268-11156094-b62b-40fe-bd2a-15fce7f5c88d.png)

#### 4. Revert with git command, not use undo
      Edit index.html
![image](https://user-images.githubusercontent.com/100080625/176156722-18808a25-c661-4505-ab8a-f87dc9bf0da2.png)

      Revert
![image](https://user-images.githubusercontent.com/100080625/176156950-7108ccd8-0371-4a83-8327-1318b33c3ef1.png)
![image](https://user-images.githubusercontent.com/100080625/176157047-76b6f695-2247-4514-a9c0-00bee46be61a.png)

#### 5. Add demo.html
![image](https://user-images.githubusercontent.com/100080625/176157410-39e09b5e-80a4-4bce-ba3f-3e8de6e152a4.png)


#### 6. Commit --amend
      Check log before
![image](https://user-images.githubusercontent.com/100080625/176157904-da846cbb-d12e-41bd-be2f-bbb35347fa5b.png)

      Edit demo.html and commit
![image](https://user-images.githubusercontent.com/100080625/176230932-36575322-0b81-4d50-ab33-e365005e16f8.png)

      git add.
      git commit --amend
![image](https://user-images.githubusercontent.com/100080625/176231412-07fb98ec-6e42-4faa-a663-edfc8a67118f.png)

![image](https://user-images.githubusercontent.com/100080625/176231142-b90679be-0c8a-46ed-9d81-a0c9c84026a0.png)

      Push and check git log again
![image](https://user-images.githubusercontent.com/100080625/176231784-bb201e52-20e8-4f0c-91c4-ee15b85692df.png)


#### 7. Git cherry-pick

      git checkout -B feature_a
      create file feature.html
      
      result
![image](https://user-images.githubusercontent.com/100080625/176234872-25387fe5-d53b-4042-b29f-b493a7a518e9.png)

      commit file feature
![image](https://user-images.githubusercontent.com/100080625/176235030-b28b0382-1802-4da4-8a9c-3bc810b866be.png)


      git checkout develop
      git cherry-pick feature_a
![image](https://user-images.githubusercontent.com/100080625/176235217-74011f78-b9a3-486c-bb31-4a997571c014.png)

      Pick last commit on feature_a and merge to develop successfull
![image](https://user-images.githubusercontent.com/100080625/176235782-fb5d0fe2-93cd-4bc4-bdf4-d1b8d0f86406.png)


#### 8. Git rebase and Fix conflict
      Edit feature.html on branch Develop and commit
![image](https://user-images.githubusercontent.com/100080625/176237159-4649d61b-9879-42fa-b20c-d53f33c32232.png)
![image](https://user-images.githubusercontent.com/100080625/176237345-d7731d10-e8a6-4a98-ab0b-a24a1d992764.png)

      Checkout feature_a and rebase develop
      
      git checkout feature_a
      git rebase develop
![image](https://user-images.githubusercontent.com/100080625/176240724-ef8c1a54-3f41-4a68-81ed-60b1c74705eb.png)

      Choose Accept incoming changes to get change on Feature_a
      git add feature.html
      git rebase --continue
![image](https://user-images.githubusercontent.com/100080625/176241853-b05ab326-ef93-4710-b55f-12ca7c99f684.png)


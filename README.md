# learn-server

## Chapter 1. User, Group, File, SSH

### 1. Create User, Group 
- Create user <br>
![image](https://user-images.githubusercontent.com/100080625/175767944-1196b4a3-5070-4978-afd1-f7d119b82370.png)


- Create group <br>
![image](https://user-images.githubusercontent.com/100080625/175768063-1313fa54-b587-478f-922f-3a543b3bb424.png)


- Result <br>
![image](https://user-images.githubusercontent.com/100080625/175768030-32dd0db7-edb6-4919-9da2-b20b643c6d7b.png)


### 2. Add user to Group <br>
- ![image](https://user-images.githubusercontent.com/100080625/175768131-71734351-14c5-416f-8342-4e115cee3b47.png)


- Result: <br>
![image](https://user-images.githubusercontent.com/100080625/175768149-b48d5142-0553-40f9-a895-f88c2b94a489.png)


### 3. File Permission <br>
- Create File example.txt <br>
![image](https://user-images.githubusercontent.com/100080625/175768316-26af7afd-9846-44e0-84a3-57544bf8d616.png)


- Change owner file to UserA and Group-02 <br>
- ![image](https://user-images.githubusercontent.com/100080625/175768396-4cabf75f-2001-4e80-a64d-dee7097b5aac.png)


- Add permisstion <br>
  - UserA: Read, Write, Execute: rwx 7
  - Group-02: Read, Execute: r-x 5
  - Other: Read only:  r-- 4 <br>


- ![image](https://user-images.githubusercontent.com/100080625/175768443-270a582a-ad2f-4b0f-a4d4-1b83600aa3b4.png)


- Login to userC and edit <br>
![image](https://user-images.githubusercontent.com/100080625/175769711-038a1fba-ebf4-4e70-821c-1858041656d1.png)
    - But at the root, the Example.txt has no changes 
    - because userC belong to Group-02, Group-02 just has allowed to Read and Execute
    - so, when userC edit, the file not written <br>

![image](https://user-images.githubusercontent.com/100080625/175769443-774379a1-28d6-453a-9c9d-ad36b1a674f4.png)

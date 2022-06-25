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

### 4. Upload a file to VPN

- Config SSH <br>
    <code> cd /eth/ssh </code> <br>
    <code> sudo vi ssh_config </code> <br>
![image](https://user-images.githubusercontent.com/100080625/175781005-52fb5d0a-95d7-41e2-9fc3-e5c58c9b1367.png)


- Connect to Server <br>
  <code>ssh intern-2022</code> <br>
![image](https://user-images.githubusercontent.com/100080625/175782200-74e4763e-cde1-41f8-9297-a0a3051dc5d1.png)

- Start Upload
  <code> scp longdang_upload.txt intern-2022:/home/ubuntu/k10/ </code> <br>
![image](https://user-images.githubusercontent.com/100080625/175781812-9ad19b9f-cc31-4dc8-954e-186c6bb3ed47.png)

### 5. Download a file from Server z

  <code> scp intern-2022:/home/ubuntu/k10/download-test.txt down-from-vpn.txt </code> <br>
![image](https://user-images.githubusercontent.com/100080625/175781828-5e0167d4-0d55-4d05-9f32-5bdd38eaeb61.png)
  result <br>
![image](https://user-images.githubusercontent.com/100080625/175782302-d7d2ea71-21c6-449e-837b-8a2471eec7b6.png)


### 6. Config SSH to transfer file with no password
- Create SSH key <br>
  <code>ssh-keygen -t rsa</code> <br>
![image](https://user-images.githubusercontent.com/100080625/175782796-0ccf3542-1f45-4ee9-9705-584d99d124be.png)


- Add public key to Server <br>

 <code>ssh-copy-id -i /home/long/.ssh/id_rsa.pub ubuntu@54.255.142.20</code> <br>

![image](https://user-images.githubusercontent.com/100080625/175782824-d2b26c6c-7658-409b-96a3-74d309d6723d.png)


- Private key at client <br>
  
  <code>Go to SSH config and add</code> <br>
![image](https://user-images.githubusercontent.com/100080625/175782974-504f9ab6-5de1-43b0-8bc3-c77091ee9436.png)


- Connect without password <br>
  <code>ssh intern-2022 </code> <br>
![image](https://user-images.githubusercontent.com/100080625/175783017-41578501-e8f2-4b81-96d6-1a61dcaa06d0.png)


- Upload file without password of VPN <br>

![image](https://user-images.githubusercontent.com/100080625/175783203-e801a218-d595-48e1-b67d-7e3d9cd9d0b9.png)



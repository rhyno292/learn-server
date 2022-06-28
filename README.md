# learn-server

## Chapter 2. Virtual Host, Server Block Apache , Nginx


### 1. Install Apache, Nginx 
- <code> $ sudo apt-get update </code>
- <code> $ sudo apt-get install apache2  </code>
- <code> $ sudo apt-get install nginx  </code>
- Result <br>
![image](https://user-images.githubusercontent.com/100080625/175915825-7410f87c-c2b6-42cd-8819-c425a9209b84.png)


### 2. Create two Virtual Host on APACHE <br>
- Step 1: Create folder for web <br>

  <code> sudo mkdir -p /var/www/vidu1.com/public.html </code> <br>
  <code> sudo mkdir -p /var/www/vidu2.com/public.html </code>
![image](https://user-images.githubusercontent.com/100080625/175918909-c1eea5d8-4c70-4bb3-a852-29cf7d3d096a.png)


- Step 2: Create file config for web
  - Copy file default config and located in /etc/apache2/sites-available/ <br>
  
    <code>sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/vidu1.com.conf </code> <br>
    <code>sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/vidu2.com.conf </code>
    
  - Edit file config
    
    - <code>vidu1.com.conf</code> <br>
    ![image](https://user-images.githubusercontent.com/100080625/175921517-1e4174a6-134a-4055-ae98-ae8463e6b2d3.png)
    
    - <code>vidu2.com.conf</code> <br>
    ![image](https://user-images.githubusercontent.com/100080625/175922599-15e21c12-7593-42f6-8fe8-24e493ebef82.png)

- Step 3: Enable Virtual Host <br>
    <code> sudo a2ensite vidu1.com.conf </code> <br>
    <code> sudo a2ensite vidu2.com.conf </code> <br>
  
    then restart the Apache<br>
  
    <code>sudo service apache2 restart</code> <br>
  
- Step 4: Create content for Web <br>

     <code> cd /var/www/vidu1.com/public_html </code> <br>
     <code> sudo touch index.html</code> <br>
     <code> sudo vi index.html</code> <br>
  
      index.html of Vidu1.com 
    ![image](https://user-images.githubusercontent.com/100080625/176072389-89d0aa70-5469-4f6e-86f4-367434b6e5b2.png)

      index.html of Vidu2.com <br>
    ![image](https://user-images.githubusercontent.com/100080625/176073195-118ba268-c747-4746-9437-2f734ad81b37.png)


- Step 5: Config /etc/hosts <br>
    ![image](https://user-images.githubusercontent.com/100080625/176078736-251b1723-939b-4194-96c0-00d4cd38d04f.png)


      Result
    ![image](https://user-images.githubusercontent.com/100080625/176075947-7e556b6d-57f5-43aa-b7ce-af723f3582bc.png)


    ![image](https://user-images.githubusercontent.com/100080625/176075387-50646a46-4340-47fc-a8dc-825104847b67.png)

### 3. Create virtual host on NGINX <br>

- Step 1: Create folder for web <br>

  <code> mkdir -p /var/www/demo-nginx-{1,2} </code> <br>
  ![image](https://user-images.githubusercontent.com/100080625/176077812-fa31e85d-4cf7-4be2-afe9-68f42f0bbd2d.png)

- Step 2: Create content for Web <br>

   <code> cd /var/www/demo-nginx-1.com/ </code> <br>
   <code> sudo touch index.html</code> <br>
   <code> sudo vi index.html</code> <br>

      index.html of demo-nginx-1.com 
  ![image](https://user-images.githubusercontent.com/100080625/176078088-0df9a97b-2746-4c8b-9fcd-aeec8704569d.png)

      index.html of demo-nginx-2.com <br>
  ![image](https://user-images.githubusercontent.com/100080625/176078130-59a61e32-20bf-4b0a-b91e-a78acbd8650d.png)

- Step 3: Create 2 file virtual host for domain

      sudo touch /ect/nginx/sites-available/demo-nginx-{1,2}.conf
      
      sudo vi demo-nginx-1.conf
     ![image](https://user-images.githubusercontent.com/100080625/176080326-8e1ade1c-bffa-4425-b630-d443429a8f17.png)
     
      sudo vi demo-nginx-2.conf
     ![image](https://user-images.githubusercontent.com/100080625/176080495-05558614-1e4f-4adf-98e1-bca0c883c10b.png )
    
   

- Step 4: Create 2 file symbolic link to dir <code> /etc/nginx/sites-available </code> <br>
    
      sudo ln -s /etc/nginx/sites-available/vinasupport-1.conf /etc/nginx/sites-enabled/vinasupport-1.conf
      sudo ln -s /etc/nginx/sites-available/vinasupport-2.conf /etc/nginx/sites-enabled/vinasupport-2.conf
  
    then restart the nginx<br>
  
      sudo systemctl reload nginx
  


     ### Result
      
     ![image](https://user-images.githubusercontent.com/100080625/176081105-17b1f7cd-3d21-4466-910f-85c5d2e7a06e.png) 


     ![image](https://user-images.githubusercontent.com/100080625/176081175-68817009-b27c-4833-8797-33f9e731cb69.png)


### 4. Create a example virtual host on local using NGINX

   - Create folder and content of Web <br>

      <code>sudo mkdir /var/www/demo</code>
      <code>touch /var/www/demo/index.html </code>
      
   - Config <br>

      <code> /etc/nginx/sites-available/demo.conf </code> 
      
      ![image](https://user-images.githubusercontent.com/100080625/176084629-69eb0c70-b4e4-4cd5-a55f-b91cfdd05433.png)

  - Create file symbolic link to <code> /etc/nginx/sites-enabled/ </code> <br>
  
      <code>sudo ln -s /etc/nginx/sites-available/vinasupport-1.conf /etc/nginx/sites-enabled/vinasupport-1.conf </code>
   
  - Add domain to <code>/etc/hosts</code> <br>
 
      ![image](https://user-images.githubusercontent.com/100080625/176082935-e8c06e08-3c43-4e16-a520-527c5a893003.png)
   
  - Reload nginx : 
      <code>sudo systemctl reload nginx</code> <br>
   
  - Result : <br>
      ![image](https://user-images.githubusercontent.com/100080625/176084764-2d99b3a0-62be-4063-9749-8c0b78fd23a4.png)


### 5. Authenticate Basic of NGINX

      Use OPenSSL for create password
    
   ![image](https://user-images.githubusercontent.com/100080625/176085573-2c49e89f-7803-41f3-98e4-a486f73378b5.png)


    - Create file name .htpasswd to save login infor in /etc/nginx
   
    - Create username: 
      sudo sh -c "echo -n 'admin:' >> /etc/nginx/.htpasswd"
    
    - Create password: 
      sudo sh -c "openssl passwd -apr1 >> /etc/nginx/.htpasswd"
   ![image](https://user-images.githubusercontent.com/100080625/176086737-1e0860df-5d15-4e78-94bb-9168bd335c11.png)

    - Create successfully
   ![image](https://user-images.githubusercontent.com/100080625/176086896-23d2f774-6658-4dd2-b425-50bc511d55b3.png)

    - Config default file <code>/etc/nginx/sites-enabled/default</code>
   #### Add 2 lines to location
      auth_basic "Restricted Content";
      auth_basic_user_file /etc/nginx/.htpasswd;
   ![image](https://user-images.githubusercontent.com/100080625/176090785-5364befb-3dc9-415f-91b5-0f4d5160bebd.png)

   #### Restart server
      sudo service nginx restart
    
   ![image](https://user-images.githubusercontent.com/100080625/176090993-6bdecec3-cd41-4a23-b5bb-b6c1914d9fc7.png)
   ![image](https://user-images.githubusercontent.com/100080625/176091039-78102ce9-08b4-40ed-b64e-a5de351aa96a.png)

   

    

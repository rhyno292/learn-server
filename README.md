# learn-server

### Chapter 4. Docker

#### 1. Install Docker
![image](https://user-images.githubusercontent.com/100080625/176812560-848f5090-1956-477a-9223-c52efa6f99b4.png)

  ##### Create folder app
      sudo mkdir app
      cd app

      touch docker-compose.yml

#### 2. Create nginx service
![image](https://user-images.githubusercontent.com/100080625/176813726-be88dacf-653c-4c4d-a371-b06f0e79bf4f.png)

  ##### Bind volumn
![image](https://user-images.githubusercontent.com/100080625/176814121-1b06a8e9-3183-4b13-82c5-b8e18c3b5494.png)

      sudo mkdir nginx
  ##### create app.conf inside nginx folder
![image](https://user-images.githubusercontent.com/100080625/176813994-2c4eb579-3630-4cf4-9934-076626f22bca.png)

#### 3. Create php service
  ##### Edit docker-compose
![image](https://user-images.githubusercontent.com/100080625/176815217-8cf37d21-e7d9-45d9-9857-88deae31afbc.png)

  ##### Create PHP_CUSTOM.Dockerfile to start php extendtion like PDO
      sudo touch PHP_CUSTOM.Dockerfile
![image](https://user-images.githubusercontent.com/100080625/176816059-aa0198ac-9f2f-4549-bc06-ad2bfc73f0fa.png)


  ##### Edit nginx
![image](https://user-images.githubusercontent.com/100080625/176815323-71de6387-464e-4212-9db9-ce34d0111ace.png)

  ##### Create file index.php in /app/public
      sudo vi index.php
![image](https://user-images.githubusercontent.com/100080625/176814796-7ce87dca-edd0-49a0-8729-b87a05c5c9c6.png)

  ##### Restart docker-compose
      docker-compose up
![image](https://user-images.githubusercontent.com/100080625/176814860-f4dc2afa-8fd4-47eb-b615-349852ca44a9.png)

#### 4. Create service MySQL
  ##### Use MariaDB
![image](https://user-images.githubusercontent.com/100080625/176816898-748666aa-a7dd-4c27-9df1-24464f6f8cfe.png)

  ##### Connect service mysql in PHP
![image](https://user-images.githubusercontent.com/100080625/176817262-d7f30e12-f341-4455-97ce-0221a05c7586.png)

  ##### Restart docker-compose up
      docker-compose up
  ##### Result
![image](https://user-images.githubusercontent.com/100080625/176817300-e027c00c-8103-494d-99f8-04b89128bcc2.png)

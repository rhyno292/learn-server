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

#### 5. Create service MailHog

##### Edit docker-compose.yml

![image](https://user-images.githubusercontent.com/100080625/176994021-a24dcd3f-3d13-4744-9a61-c4f502ccadc3.png)

##### Edit PHP_CUSTOM.dockerfile

      RUN apt-get update &&\
          apt-get install --no-install-recommends --assume-yes --quiet ca-certificates curl git &&\
          rm -rf /var/lib/apt/lists/*
      RUN curl -Lsf 'https://storage.googleapis.com/golang/go1.8.3.linux-amd64.tar.gz' | tar -C '/usr/local' -xvzf -
      ENV PATH /usr/local/go/bin:$PATH
      RUN go get github.com/mailhog/mhsendmail
      RUN cp /root/go/bin/mhsendmail /usr/bin/mhsendmail
      RUN echo 'sendmail_path = /usr/bin/mhsendmail --smtp-addr mailhog:1025' > /usr/local/etc/php/php.ini

![image](https://user-images.githubusercontent.com/100080625/176994054-3e9ef061-0081-48a9-b393-3ca6a3898907.png)

##### Create function to Send Mail

![image](https://user-images.githubusercontent.com/100080625/176994083-67d02d04-8119-4201-9cc4-4b851599ddb9.png)

##### Create form to enter mail

![image](https://user-images.githubusercontent.com/100080625/176994102-da906b72-697b-4626-a50b-18394cf819c8.png)

##### Create actionForm.php to handle sendmail

![image](https://user-images.githubusercontent.com/100080625/176994467-9d9a5125-727d-4a76-9ae3-65177e3a4519.png)

##### Restart docker-compose up

      docker-compose build --no-cache
      docker-compose up -d

##### Demo

      Input a email and click Send

![image](https://user-images.githubusercontent.com/100080625/176994421-47d713b1-205d-498a-a938-4db8c612eab6.png)

##### Result

![image](https://user-images.githubusercontent.com/100080625/176994517-c0f85683-4932-4e2b-9054-35a87abcfcfe.png)
![image](https://user-images.githubusercontent.com/100080625/176994535-71cd1626-d07a-4a7e-bf26-f39bbc562c78.png)
![image](https://user-images.githubusercontent.com/100080625/176994538-b2870744-5dbc-4821-9aba-7bb58187b9c5.png)

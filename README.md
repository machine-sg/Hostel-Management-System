# Hostel-Management-System
This is a Online Hostel Management System using which students will be able to apply for the hostels and the hostel manager will allocate them to the hostel following FCFS. If a student is having distance from college is greater than 90 km and income is less than 2.5 lacs, then only the student is eligible to get a hostel room. Also the admin will be able to appoint hostel manager to each hostel.

## Features

  ### Student Side
  1. Login Page and Signup Page
     - Login Page for Student and Hostel-Manager / Admin
     
     ![Screenshot (979)](https://user-images.githubusercontent.com/60744373/143680045-c8b32c82-a5ac-4f10-a08a-d8ad807c6d93.png) ![Screenshot (980)](https://user-images.githubusercontent.com/60744373/143680071-f78bce18-e03d-4822-b862-70576fa41ec1.png)
     
     - Signup Page for Student
   
     ![screencapture-localhost-Hostel-Management-System-signup-php-2021-11-27-16_57_16](https://user-images.githubusercontent.com/60744373/143679529-97ea7962-c24f-415d-91e5-463b9d3e681d.png)

  2. Student will be able to check the available hostel and can apply according to their requirements
  
     ![screencapture-localhost-Hostel-Management-System-services-php-2021-11-27-16_23_22](https://user-images.githubusercontent.com/60744373/143679602-e8c113ee-bd98-4b13-afbb-ee530f9e1d0a.png)
     
     ![Screenshot (982)](https://user-images.githubusercontent.com/60744373/143679678-10bb6108-e830-487a-8c1d-9d106e83f3bc.png)
     
  3. Student will be able to message the hostel manager and also to check the received messages
  
     ![Screenshot (988)](https://user-images.githubusercontent.com/60744373/143680147-9ef77453-f581-40fe-9e20-78aff815a386.png)
        
     ![Screenshot (989)](https://user-images.githubusercontent.com/60744373/143680168-53753e80-2eb3-48f6-8dc4-3dcd72f2d1c9.png)
     
  4. He / she will be able to apply for vacating the room (only when he/she has been alloted to a hostel room) and to apply for ths he needs to py the due amount as well
   
     ![Screenshot (991)](https://user-images.githubusercontent.com/60744373/143680271-260b4a88-8c89-45fe-a9a9-2173763fab98.png)
     
     ![Screenshot (993)](https://user-images.githubusercontent.com/60744373/143680305-899cba1e-58cb-49e8-af22-2075040b7d64.png)
     
     
  ### Admin Side
  1. Admin can appoint or remove a hostel manager
     ![screencapture-localhost-Hostel-Management-System-admin-create-hm-php-2021-11-27-17_31_17](https://user-images.githubusercontent.com/60744373/143680498-c8c8a023-01c8-4f19-bcde-54287db3e49d.png)
     
  2. Admin will to able to check all the students applied for the hostel. He/she can message the hostel manager and will be able to add a new hostel.
     ![Screenshot (995)](https://user-images.githubusercontent.com/60744373/143680598-15dacd53-c548-4032-bd11-22a28f65166b.png)
     
     
  ### Manager Side
  1. Manager allocates rooms to the students who have applied. This allocation happens depending on the FCFS till then the rooms are available. But student with distance less than 90 km and income greater than 2.5 lacs does not get a room.
  
    - Before allocation
      ![i1](https://user-images.githubusercontent.com/60744373/143680850-c06f4c70-accf-4136-9fb3-3258a5f50178.png)

    - After allocation
      - Only 3 rooms were empty that's why 3 of the students got rooms depeding on their application time by following FCFS. Others will remain in the same list
      ![Screenshot (997)](https://user-images.githubusercontent.com/60744373/143680927-d75ca132-4b5a-46cd-867a-0536d5810867.png)

  2. He will also be able to check the allocated rooms, empty rooms. He can add a new room and also able to check the list of students those who wants to vacate the room
     ![i2](https://user-images.githubusercontent.com/60744373/143681007-1b42f993-ebbd-4b06-b451-550644b449f5.png)
     
  3. He can message the students and check the received messages as well.


## 🧰 Languages and Tools:
<p align="center">
<img src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/html/html.png" alt="Python" height="40" style="vertical-align:top; margin:4px">
<img src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/css/css.png" alt="Python" height="40" style="vertical-align:top; margin:4px">
<img src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/bootstrap/bootstrap.png" alt="Python" height="40" style="vertical-align:top; margin:4px">
<img src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/javascript/javascript.png" alt="Javascript" height="40" style="vertical-align:top; margin:4px">
<img src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png" alt="Python" height="40" style="vertical-align:top; margin:4px">
<img src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/mysql/mysql.png" alt="Python" height="40" style="vertical-align:top; margin:4px">
<img src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/visual-studio-code/visual-studio-code.png" alt="VS Code" height="40" style="vertical-align:top; margin:4px">
</p>

## How to Run
   1. Download the zip file
   2. Put the root directory inside "xampp/htdocs" folder
   3. Open [phpMyAdmin](http://localhost/phpmyadmin)
   4. Create a databse with name hostel_management_system
   5. Import hostel_management_system.sql
   6. Finally open the url [http://localhost/Hostel-Management-System](http://localhost/Hostel-Management-System/)
   

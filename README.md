# <div align="center">`Hackathon 2k19`</div>

## <div align="center">`Team RYAZ on Question Papers OTA`</div>

### Team Members

---

1. Nandini Prashar – Team Leader
2. Rajvir Singh
3. Kamalpreet Kaur
4. Divyanshu Garg
5. Dashmeet Singh - Mentor

---

## <div align="center">INDEX</div>

1. **_Introduction_**<br/>
   1.1. Purpose<br/>
   1.2. Document Conventions<br/>
   1.3. Intended Audience and Reading Suggestion<br/>
   1.4. Project Scope<br/>
   1.5. Definitions and Acronyms<br/>
   1.6. References
2. **_Overall Description_**<br/>
   2.1. Product Perspective<br/>
   2.2. User class and Characteristics<br/>
   2.3. Operating Environment<br/>
   2.4. Design and Implementations Constraints
3. **_System Features_**
4. **_System Requirements_**<br/>
   4.1. **External Interface Requirements**<br/>
   4.1.1. User Interface<br/>
   4.1.2. Hardware Interface<br/>
   4.1.3. Software Interface<br/>
   4.1.4. Communication Interface<br/>
   4.2. **Other Requirements**<br/>
   4.2.1. Performance Requirements<br/>
   4.2.2. Safety Requirements<br/>
   4.2.3. Security Requirements

---

### **1. Introduction**

#### 1.1. Purpose

<p align="justify">The purpose of this document is to build an “Question Papers OTA” to ease the generation of questions papers for Student’s End Semester Examination and then will view to authenticate users.</p>

#### 1.2. Document Conventions

| Shortend | Full Stand          |
| -------- | ------------------- |
| OTA      | Over To Air         |
| db       | DataBase            |
| ID       | Identity Card       |
| E-R      | Entity Relationship |

#### 1.3. Intended Audience and Reading Suggestion

<p align="justify">This project is a prototype for the Question Papers OTA and it is restricted within school/college premises. This has been implemented under our team members’ practices. This project is useful for the teachers as well as the mother-nature.</p>

#### 1.4. Project Scope

- Admin can only register new accounts and each user can be logged in to their existing accounts.
- Entry for each question papers will be much easier.
- Only authenticated user can view the question papers within a given slot of time i.e the time between the start and the end of the exam.
- Teachers and Examiner both can view the question paper but only teachers can generate question papers.
- Reduces the uses of hardcopy of papers.

#### 1.5. Definitions and Acronyms

- There will be a risk if the question papers are seen by the students before the examination.
- Students can see the question paper only when they are displayed with the question paper by their invigilator.

#### 1.6. References

[Github](https://www.github.com)

### **2. Overall Description**

#### 2.1. Product Perspective

A distributed Online Student Examination database System stores the following information:

- **User details:**
  It includes the username, password and user-type fields for registering and log in authenticated users.
- **Department details:**
  It includes the department-name field that describe the departments of the students.
- **Semester Details:**
  It includes the semester-name field that describe at which semester the student is studying.
- **Subject Details:**
  It includes the subject-name, subject-code, semester-name, and department-name fields that detailed the subjects allotted to students according to their department-name and semester-name.
- **Question Paper Description:**
  It includes subject-code, paper-id, maximum-marks, semester-name, year fields. The subject-code describe that from which subject, the question belongs. The paper-id tells the unique identity of question papers. The maximum-marks tells the maximum marks that student can get by solving the given question paper. The semester-name and year tells the question paper belongs to which semester and year of students respectively.
- **Questions Details:**
  It includes paper-id, parts (divisions of single question paper), questions and marks (marks per question) fields.

#### 2.2. User Class and Characteristics

- **The examiner (user) should be able to do following functions:**
  - Can only view the question papers if they are authenticated by the administrator.
- **The teacher (user) should be able to do following functions:**
  - Can add question papers.
  - Can view question papers.
  - Can update question papers.
  - Can delete question papers.
- **The administrator (user) should be able to do following functions:**
  - Can registered new users as authenticated users to set and view the question papers.
  - Can delete authenticated users.
  - Can view any question papers.
  - Can add departments and subjects as required.

#### 2.3. Operating Environment

- Client/Server system.
- Operating System: Windows10.
- Database: MySQL.
- Platform: JavaScript, PHP.

#### 2.4. Design and Implementations Constraints

- The global schema.
- SQL commands for queries/applications.
- Implement the database at least using a centralized database management system.

### **3. System Features**

- It is fast and much accurate.
- It also needs less manpower, to execute the examination.
- It saves student's time in examination.
- It also helps the environment by saving papers.
- Only administrator can register new accounts and each user can be logged in to their existing account.
- Only authenticated user can view the question paper on thier devices, not students (instead, the students may be displayed with the question paper on the class projector).
- Only teachers can generate question papers.

### **4. System Requirements**

#### 4.1. External Interface Requirements

##### 4.1.2. User Interfaces

- **Front-end Software:** HTML, CSS, JavaScript.
- **Back-end Software:** PHP, MySQL.
- **Browser** that support CGI, HTML, CSS and JavaScript.

##### 4.1.2. Hardware Interfaces

- **Processor:** Above Pentium4.
- **Operating System:** Windows/Linux/MAC.

##### 4.1.3. Software Interfaces

| **Software Used**     | **Description**                                                                                                                                                    |
| --------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Operating System      | We have chosen Windows operating system for its best support and user-friendliness.                                                                                |
| Database              | To save records of the user, questions, and subjects, we have used MySQL db.                                                                                       |
| Server-Side Scripting | To perform database operation through scripting at server-side, we use PHP language.                                                                               |
| Front-End Languages   | To design an interactive front-end, we use HTML (for structuring the application), CSS (for styling the HTML structure) and JavaScript (for interactive webpages). |

##### 4.1.4. Communication Interfaces

<p align="justify">The project support all type of web browsers. We are using simple and user-friendly communication interfaces.</p>

#### 4.2. Other Requirements

##### 4.2.1. Performance Requirements

- **E-R Diagram:**
  The E-R Diagram constitutes a technique for representing the logical structure of a database in a pictorial manner. This analysis is then used to organize data as a relation and finally obtaining a relation database.
  <br/>**Entities** specify distinct real-world items in an application.
  <br/>**Attributes/Properties** specifies properties of an entity and relationships.
  <br/>**Relationships** connect entities and represent meaningful dependencies between them.<br/>
- **Normalization:**
  The basic objective of normalization is to reduce redundancy which means that information is stored only once. Storing information several times leads to wastage of storage space and increase in the total size of the data stored. The normalization is the process of breaking down a table into smaller tables.

##### 4.2.2. Safety Requirements

<p align="justify"><p align="justify">If there is extensive damage to a wide portion of the database due to catastrophic failure, such as a disk crash, the recovery method restores a past copy of the database that was backed up to archival storage and reconstructs a more current state by reapplying or redoing the operations of committed transactions from the backed up log, up to the time of failure.</p>

##### 4.2.3. Security Requirements

<p align="justify">Security systems need database storage just like many other applications. However, the special requirements of the security market mean that vendors must choose their database partner carefully.</p>

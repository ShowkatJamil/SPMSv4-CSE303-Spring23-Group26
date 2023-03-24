# SPMSv4-CSE303-Spring23-Group26
System Requirements
In a university, a student is admitted under a specific degree program. Each program belongs to a department, and the related departments are kept under each school. Courses are taught by instructors; departments are run by department heads; and schools are run by deans. You are requested to explore the information required for the schools and the departments of IUB for this purpose. Please find out the information that is related to the degree programs as well. Also identify the student information needed for monitoring their performances and the information you may need to keep track of for the students themselves.
Students enroll in a certain program under a department that falls under a certain school. Students usually take courses as per the curriculum of their respective programs. You should explore the data regarding student enrollment.
Students are graded based on their performance in assessments in each course they take by the instructors who teach that corresponding course to them. The grades from the courses contribute to the cumulative grade point average of a student and the grade point average at the end of each semester based on the courses taken in that semester. Students may retake courses if they wish to improve their grades. You should explore the grading procedure and its relevant data.
Each program consists of many courses. There are different categories of courses (e.g., foundation, major, minor). Students are required to complete the courses associated with the programs to fulfill the requirements for the degree. Please find out the related information regarding courses and categories.
Under the OBE model, for each program, there will be a set of program learning outcomes (PLO). To fulfill the requirements of a degree program, a student must achieve the PLOs associated with that program. To evaluate the students in each course, there is a set of course outcomes that are mapped to the PLOs of the degree program.
The COs are measured through different assessment techniques under each course. The faculty members evaluate the COs achieved and map the PLOs achieved by each student in a course. Please find related information regarding PLOs, COs, and Faculty members.
All the COs and the mapped PLOs are stored in the system and finally compared with each other so that we can generate the result of PLO fulfilment. Please note that a student may fail to fulfil a PLO in a course, but they can fulfil the requirement by
achieving the PLO from another course higher than the previous course. However, in the case that a student can’t fulfill a PLO that they already fulfilled in the previous course, it can be misleading, and the decision on how to handle such cases might be reserved by the faculty members of the courses. Also, take into consideration the comparison of performance between two students who possibly took the same set of courses, where one might have achieved a certain PLO in all courses that had it, and the other might have achieved it in fewer courses. Needless to say, all COs and PLOs need to be tracked regardless of whether they have already been achieved or not. Try to consider many such use cases that would be necessary for future analyses for the purposes of a student performance monitoring system. Think of the evaluation technique, assessment plan, and storing mechanism of the result.
The following is a list of requirements w.r.t output reports that should be fulfilled in order to build a system that enables users to monitor student performance and analyze relevant metrics. Please note that input forms should be available to enter the data required to generate any output report. The system should be implemented first using dummy data and then tested on sample data.
Requirements Already Implemented:
● School-wise, department-wise and program-wise student enrollment comparison. For example, a graph showing how many students have enrolled in each department with respect to a given period of time/semesters.
● School-wise, department-wise and program-wise student performance trends based on CGPA with respect to a given period of time/semesters.
● Course-wise (for a selection of courses) student performance trend based on GPA with respect to a given period of time/semesters.
● Instructor-wise (for a selection of instructors) student performance trend based on the GPA of the students in the courses taught by each of the instructors so far with respect to a given period of time/semesters.
● VC-wise, dean-wise, or head-wise student performance trend based on the GPA of the students under the school/program corresponding to the leadership team.
● Instructor-wise student performance trend for a chosen course with respect to a given period of time/semesters.
● PLO total percentage score for each PLO calculated from the scores achieved in each CO associated with the corresponding PLO among all the courses the student has done so far, along with the departmental average performance for comparison. Also, for each PLO, what percentage of it was achieved from each of the courses associated with the corresponding PLO, and what percentage was
achieved via each of all the COs associated with the corresponding PLO. All of this for a chosen school, program, or department.
● PLO achievement of a student for each of the courses taken so far.
● Comparison of PLO-achieved percentage versus PLO-attempted percentage
● Comparison of a course’s, student’s, department’s, program’s, or school’s expected PLO-achievement versus actual with respect to a given period of time/semesters.
● Summary of CO-PLO achievement stats for a chosen course, program, department, school.
● Create a user interface to add questions to a question bank, where questions of all the semesters will be present.
● A Faculty User will be able to select the current semester and add an exam, e.g., Quiz/Mid-Term/Final-Term.
● Then the Faculty User will add questions to that exam. The questions will be needed to assign to a CO. The user will be able to add multiple questions under a single exam. And must assign CO with all the questions separately. The user will be given a text box to type the question.
● After the Faculty User adds the question, the applications will create an option to view the question. In the question view interface, the user will be able to see the domain of learning along with its level (The difficulty level). The level will be required to be mapped from the questions according to the verbs list given previously in the google classroom. [The verbs list can be mapped from the question using the LIKE operator in SQL queries]
● The faculty user will also be able to assign marks to each of the questions separately, from which the percentage of CO’s and PO’s achieved can be calculated.
● All the users will be able to see a spider chart of the CO’s and PO’s achieved by the students.
● Create a user interface to add OBE based course outline of a single course. The OBE based course outline should be formatted according to the course outline provided in the Lab classroom. Faculty user will add the course outline, and all the users will be able to view it.
● During the creation of the course outline the user must assign course code, course title, course type, credit value, contact hours per week, course description, course objective, course policy, academic dishonesty section, student with disabilities and stress section, non-discrimination policy section, course content, course learning outcome (CLO) matrix, lesson planning with mapping of CLO, teaching and assessment strategies, assessment and evaluation section, grading chart, and reference book and additional materials section.
● In the CLO matrix the user must assign all the CLO’s along with the CO
Description, Bloom’s Learning Level, PLO assessed, CLO – PLO correlation separately. (All the above must be stored in the database)
● In the Lesson Planning with mapping of CLO, teaching and assessment strategies section, every week must be assigned with a topic, Teaching learning strategy, assessment strategy, and the corresponding CLO’s of the topic.
● After creation of the course outlines any user will be able to download course outline of a course in a program separately and the user will also be able to download all the course outline of all the courses in a program in a single PDF file.
Requirements Needed to Implement:
A web application has been developed to help manage student registration, course selection, and academic records. The current implementation provides basic functionality for student enrollment and course management, but it does not include any features for calculating course outcomes based on student grades. Thus, for the students whose data are not inputted into the system in the current format you have to enhance the existing web application by adding new features that allow the calculation of course outcomes based on student performance data. Specifically, the new features will enable the following data points to be captured and used in the calculation of course outcomes:
• Student ID
• Educational year
• Educational semester
• Enrolled course
• Enrolled section
• Obtained grade
Scope: The scope of this project includes the following:
• Adding new data fields to the existing web application to capture the above-mentioned data points. The user must be able to input the data using a manual form and also can import a csv file from which the data points can be extracted and inputted into the database.
• Implementing a new feature that calculates the course outcome percentage based on the obtained grades for each course.
• Displaying the calculated course outcome percentage to students and faculty members through the web application.
Abbreviations:
OBE = Outcome Based Education
CO = Course Outcome
PO = Program Outcome
CLO = Course Learning Outcome
PLO = Program Learning Outcome

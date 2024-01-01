# Autism Quest

Autism Quest is a web application designed to provide a comprehensive platform for autistic children, their caregivers, and the community at large. The application offers interactive games, information on autism awareness, valuable resources, and a platform for sharing personal stories within the autism community. The project is built using Laravel, React, SQL, and Bootstrap, ensuring a responsive and well-crafted user experience.

## Table of Contents
1. [Problem Analysis](#problem-analysis)
2. [Requirements](#requirements)
3. [How to Run the Project](#how-to-run-the-project)
4. [Features](#features)
5. [Design](#design)
6. [Conclusion](#conclusion)

## Problem Analysis

### 1.1 Autism Spectrum Disorder
Autism Spectrum Disorder (ASD) is a neurological and developmental disorder affecting communication, interaction, learning, and behavior. Autism Quest addresses the challenges faced by autistic children and their caregivers, emphasizing the need for awareness, support, and accessible resources.

### 1.2 Challenges Faced by Autistic Children and their Caregivers
The application recognizes the unique challenges faced by autistic children and caregivers, including communication difficulties, social interactions, sensory sensitivities, and financial burdens.

### 1.3 Importance of Autism Awareness in Pakistan
Given the cultural context in Pakistan, where mental health is often stigmatized, the application aims to raise awareness about autism. It seeks to bridge the gap in understanding and provide support to parents and caregivers advocating for their children.

## Requirements

### 2.1 Primary Stakeholders
- Autistic Children
- Parents, teachers, and caregivers of Autistic children
- External Users (General public)

### 2.2 Features of the Web Application
1. Fun interactive games for autistic children.
2. Information on autism awareness.
3. Resources for autistic people and their caregivers.
4. Stories from caregivers/parents/teachers.

### 2.3 Functional Requirements
- User-friendly navigation for all users.
- Comprehensive information on autism.
- Accessible interactive games for autistic children.
- Design with inclusivity for users with varying abilities.

### 2.4 Non-functional Requirements
- Security, reliability, and scalability for a large user base.

## How to Run the Project

To run the project locally, follow these steps:

1. **Clone the repository:**
   ```
   git clone https://github.com/your-username/autism-quest.git
   cd autism-quest
   ```

2. **Install Dependencies:**
   ```
   composer install
   npm install
   ```

3. **Create the database:**
   ```
   php artisan migrate
   ```

4. **Seed the database:**
   ```
   php artisan db:seed
   ```

5. **Run the application:**
   ```
   php artisan serve
   ```

Visit `http://localhost:8000` in your browser to explore Autism Quest.

## Features

1. **Interactive Games:** Engaging games tailored for autistic children, including Math Mania, Galaxy Galore, and Emo Explosion.

2. **Autism Awareness:** FAQs and resources to disseminate accurate information about autism.

3. **Resources:** Details about special schools in Pakistan for autistic children.

4. **Stories:** Personal experiences from caregivers, parents, and teachers within the autism community.

## Design

### 3.1 Design Rationale

#### 3.1.1 Considering the Needs of Autistic Children
- Readable Fonts: Open Dyslexie font for improved readability.
- Vibrant Colors: Eye-catching and soothing color scheme.
- Sensory Stimuli: Minimal use of overstimulating elements.
- Speech Impairment: Activities to assist in communication and vocabulary building.
- Communication via Visuals: Incorporation of images for better understanding.

#### 3.1.2 Applied Design Principles
- Consistency: Maintained consistent layout, colors, typography, and navigation.
- User-Centered Design: Prioritized preferences of end-users.
- Content Prioritization: Educational games prominently placed on the homepage.

### 3.2 Web Engineering Techniques Used

#### 3.2.1 Programming Languages and Frameworks Used
- HTML: Hypertext Markup Language
- CSS: Cascading Style Sheets
- JS: Javascript
- PHP
- Laravel: PHP framework
- React: Javascript Frontend Library

#### 3.2.2 Web Engineering Techniques Used
- Accessibility: Proper image alt text and contrasting colors for enhanced accessibility.
- HTML Structure: Semantic HTML elements for meaningful content structure.
- Meta Tags: Ensured proper character encoding and viewport settings.
- Responsive Web Design: Ongoing efforts to improve responsiveness.
- Routes, Middlewares



## Conclusion

The report provides a detailed overview of the problem analysis, requirements specification, and design considerations for Autism Quest. The application aims to make a positive impact by promoting awareness, providing support, and creating an inclusive platform for the autism community. Contributions and feedback are welcome to enhance and expand the capabilities of Autism Quest.

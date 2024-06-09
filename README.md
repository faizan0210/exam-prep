# Exam Prep Module

This is a Laravel application designed to address the problem of ensuring exclusivity of exam preparation content for students.

## Problem Statement

As a user, our client is facing a serious problem with their revenue model. They have a school exam preparation module for standard 5th to standard 10th. They provide exclusive exam preparation content to their internal students only, but the students share their login credentials with others, compromising the exclusivity of the content.

## Client Requirements

- Implement a feature where a user can only log in to two devices: their laptop and their mobile phone.
- Allow the student to log in to the exam portal using their laptop first. Once logged in, they can browse exams and also log in to their mobile device.
- If a student tries to log in with a different laptop or mobile phone after registering on two devices, they should receive a message indicating that they can only add their devices once. If they want to change the device, they need to contact their class teacher.
- Provide a contact form for the student to request a device change, which will be handled by the class teacher.
- The teacher should be able to log in to the portal and delete both student devices, allowing the student to add new devices.

## Features

- Device registration and management for students and teachers.
- Contact form for device change requests.
- Teacher dashboard for managing student devices.
- Frontend and backend implementation using Laravel.

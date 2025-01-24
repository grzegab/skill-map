# Skill MAP project
This project is about creating connections to skills to create map of knowledge. User create a path with name and courses or books attached to it.
For example next.js can have udemy courses and there can be frontend path taht contains react lib and inside next js.

Goal here is to make it flexible so it can be updated easily.

## Tech

For backend Symfony 7.2 is used and PHP vestrsion 8.4.
To test it locally Docker was used.
For internal messanger Redis was used. 






Here’s a simplified and clearer version of the text in Markdown format, with added explanations and examples to make it easier to understand.

---

# Skill MAP Project

This project is designed to create a **map of knowledge** by linking different skills, courses, and resources together in an organized way. The system allows users to create "paths" that group related items like courses, books, or libraries.

### Key Idea
The goal is to make the system **flexible** so it can be updated or expanded easily as new skills or resources are added.

---

## How It Works

Here’s how the Skill MAP project organizes information:

1. **Skills and Paths:**
    - A "skill" refers to a particular area of knowledge, such as `Next.js` or `React`.
    - A "path" groups together related skills or resources into a logical sequence.

2. **Resources:**
    - Each skill or path can have resources attached, like online courses or books.
    - For example:
        - `Next.js` might have Udemy courses linked to it.
        - A broader path like `Frontend Development` might include skills like **React** and **Next.js**.

3. **Hierarchy Example:**
```
Frontend Development Path:
       - React Library
       - Next.js Framework:
           - Udemy Course: Build Scalable Apps with Next.js
           - Official Next.js Documentation
```

This structure helps users visualize learning as a progressive map where they go from foundational skills to more advanced ones.

---

## Tools and Technologies

### Backend
- **Symfony 7.2** is used for the backend.
- The project runs on **PHP 8.4**.

### Testing and Deployment
- **Docker** is used to test and run the project locally.

### Communication Tools
- For internal communication within the system, **Redis** is used as the messaging service. This allows for fast and efficient data exchange.

### Why These Tools?
- **Symfony** supports the creation of robust and secure APIs.
- **Redis** ensures smooth communication between different parts of the application (for example, managing tasks or queues).
- **Docker** makes the environment consistent, so the project works the same on different computers.

---

## Example Use Case

Imagine you are a beginner in **Frontend Development**.

1. You start by looking at the **Frontend Development Path**.
2. The path shows that you need to:
    - Learn **HTML/CSS**.
    - Move to **JavaScript**.
    - Then, dive into libraries like **React** and frameworks like **Next.js**.
3. Along the way, you’ll find recommended resources like:
    - An **HTML course on freeCodeCamp**.
    - A **React crash course on YouTube**.
    - A **Next.js book or Udemy course**.

The Skill MAP helps you navigate your learning journey in an organized way.

---

## Current Development Status

### What Is Done So Far:
- The structure for building paths and linking resources is in-progress.
- Some database and framework setup has been implemented.

### What’s Next:
- Adding backend **endpoints** to allow users to add, remove, or update paths and skills.
- Testing and refining the functionality with local Docker setups.

---

## Project Author
Greg, Lord of PHP Solutions, Master of Golang Services, Warden of RESTful Gates, Keeper of gRPC Streams,
Protector of SQL Queries, Overlord of RabbitMQ Channels, and Guardian of Redis Keys
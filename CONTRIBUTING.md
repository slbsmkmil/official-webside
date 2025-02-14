# Contributing Guidelines

Thank you for your interest in contributing to the **SMKMIL Student System**! This project is managed by the **Student Leaders Board of Sekolah Menengah Kebangsaan Munshi Ibrahim Labis (SLB SMKMIL)**. To ensure the security and privacy of student data, please follow these guidelines carefully.

---

## Contribution Access
- Only authorized members of **SLB SMKMIL** may contribute directly to this repository.
- External contributions are currently not accepted due to the sensitive nature of student data.

---

## Getting Started
1. **Fork the Repository** (for SLB SMKMIL members only):
   - Fork the repository to your GitHub account.
   - Clone the forked repository to your local machine:
     ```bash
     git clone https://github.com/your-username/repository-name.git
     ```

2. **Setup the Development Environment**:
   - Use dummy or anonymized data for testing (e.g., replace real Identity Card Numbers with placeholder values).
   - Never commit real student data (names, emails, IC numbers, etc.) to the repository.

3. **Create a Branch**:
   - Create a new branch for your changes:
     ```bash
     git checkout -b feature/your-feature-name
     ```

---

## Coding Standards
- **Data Protection**:
  - Ensure sensitive fields (e.g., Identity Card Numbers, Birthdates) are handled securely and never exposed in logs or error messages.
  - Use environment variables for configuration (e.g., database credentials) and add them to `.gitignore`.
- **Documentation**:
  - Comment your code clearly, especially when handling sensitive data.
  - Update the `README.md` if your changes affect setup or usage instructions.
- **Testing**:
  - Test your changes thoroughly to avoid introducing security vulnerabilities.
  - Verify that no real student data is present in test cases.

---

## Submitting a Pull Request
1. **Checklist Before Submitting**:
   - [ ] I have replaced any sensitive student data with placeholders.
   - [ ] My code follows the project’s security and privacy standards.
   - [ ] I have documented my changes (if applicable).

2. **Create a Pull Request (PR)**:
   - Target the `main` branch of the original repository.
   - Provide a clear title and description of your changes.
   - Include screenshots or test results if applicable.

3. **Code Review**:
   - All PRs will be reviewed by at least **two SLB SMKMIL members**.
   - Address feedback promptly and update your PR if requested.

---

## Prohibited Actions
- **Do NOT**:
  - Share real student data (names, IC numbers, etc.) in the repository.
  - Modify the registration form or data-handling logic without approval.
  - Merge your own PRs without a review from another SLB SMKMIL member.

---

## Reporting Issues
If you encounter a bug or security concern, follow the guidelines in [SECURITY.md](SECURITY.md).

---

## Contact
For questions about contributions, contact:
- **SLB SMKMIL**: [slbsmkmil@gmail.com](mailto:slbsmkmil@gmail.com)
- **Contact Form**: [https://bit.ly/ttsmilcu](https://bit.ly/ttsmilcu)

---

**By contributing, you agree to comply with these guidelines and the [CODE_OF_CONDUCT.md](CODE_OF_CONDUCT.md). Misuse of data or violation of rules will result in disciplinary action.**

Thank you for helping us maintain a secure and efficient system for SMKMIL! 🚀
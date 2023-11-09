# mvc-framework
### The Model-View-Controller (MVC) design pattern

The Model-View-Controller (MVC) design pattern is a software architectural pattern used in designing and organizing code for applications, especially web and GUI-based systems. It separates the application into three interconnected components to achieve a clean separation of concerns and promote maintainability, reusability, and extensibility.
Here's a brief overview of each component in the MVC pattern:

1. **Model**:
    - Represents the application's data and business logic.
    - Contains the application's data structures, rules, and state.
    - It interacts with the database to retrieve or manipulate data.
    - It does not depend on the user interface or the way data is presented.
2. **View**:
    - Represents the user interface and is responsible for presenting the data to the user.
    - Receives input from the user and displays the appropriate output.
    - It does not contain business logic; its primary role is to display data.
    - Multiple views can be associated with a single model to present the data differently.
3. **Controller**:
    - Acts as an intermediary that manages the flow of data between the model and the view.
    - Receives input from the user (via the view) and processes it.
    - Interacts with the model to update data based on the user's actions.
    - Updates the view to reflect any changes in the model.

In summary, the MVC pattern separates the application into three distinct components, allowing for better code organization, reusability, and easier maintenance. Changes to one component (e.g., the model) do not directly affect the other components (e.g., the view and controller), promoting a more modular and flexible architecture.


### Exercice:
- Create a MVC without an framework

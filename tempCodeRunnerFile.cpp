#include <iostream>
#include <string>
using namespace std;

struct User {
    string name;
    int password;
};

int main() {
    User user;
    cout << "Enter your name: ";
    getline(cin, user.name);
    cout << "Enter your password (between 1000 to 9999): ";
    cin >> user.password;
    
    int attempt = 1;
    while (attempt <= 3) {
        int confirm_password;
        cout << "Re-enter your password to confirm: ";
        cin >> confirm_password;
        
        if (confirm_password == user.password) {
            cout << "Welcome, " << user.name << "!\n";
            break;
        } else {
            cout << "Incorrect password, please try again.\n";
            attempt++;
        }
    }
    
    if (attempt == 4) {
        cout << "Access denied. Please contact administrator.\n";
    }
    
    return 0;
}

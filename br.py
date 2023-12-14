import datetime

def birthday_wish(name, dob):
    today = datetime.date.today()
    next_birthday = dob.replace(year=today.year)
    
    if today > next_birthday:
        next_birthday = dob.replace(year=today.year + 1)
    
    days_left = (next_birthday - today).days
    wish = f"Hey {name}! There are only {days_left} days left until your birthday on {next_birthday}. Don't forget to make your birthday plans!"
    
    return wish

# Replace 'your_name' and 'your_birthday' with your actual name and birthday
your_name = 'your_name'
your_birthday = datetime.date(2000, 1, 1) # Example: January 1, 2000

# Calculate the birthday wish
wish = birthday_wish(your_name, your_birthday)

# Print the birthday wish
print(wish)

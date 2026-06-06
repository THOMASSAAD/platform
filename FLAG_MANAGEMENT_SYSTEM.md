# Flag Management System - Complete Implementation

## Overview
Converted the "Academy" section in the admin panel to a full-featured "Manage Flags" system with complete CRUD operations.

---

## 📁 Files Modified

### 1. **database/crud.php**
Added 5 new flag management functions:

#### `insertFlag($flag_value, $level, $hint = '')`
Adds a new flag to the database.
```php
$crud->insertFlag('FLAG{example}', 1, 'This is a hint');
```
- **Parameters:**
  - `$flag_value` (string): The flag value (e.g., "FLAG{example}")
  - `$level` (int): 1=Easy, 2=Medium, 3=Hard
  - `$hint` (string): Optional hint for users

#### `updateFlag($flag_id, $flag_value, $level, $hint = '')`
Updates an existing flag.
```php
$crud->updateFlag(5, 'FLAG{updated}', 2, 'Updated hint');
```

#### `deleteFlag($flag_id)`
Deletes a flag and all associated user_flags records.
```php
$crud->deleteFlag(5);
```

#### `getTotalFlags()`
Returns the total number of flags.
```php
$total = $crud->getTotalFlags();
```

#### `getFlagById($flag_id)` (already existed, now used)
Retrieves a single flag by ID.

---

### 2. **admin.php**
Replaced the static "Academy" section with dynamic Flag Management.

#### New Variables Added
```php
$editFlag = null; // Stores flag being edited
```

#### Request Handlers Added

**Add Flag:**
```
POST flag_action=add_flag
- flag_value (required)
- flag_level (required) [1, 2, or 3]
- flag_hint (optional)
```

**Update Flag:**
```
POST flag_action=update_flag
- flag_id (required)
- flag_value (required)
- flag_level (required)
- flag_hint (optional)
```

**Delete Flag:**
```
GET delete_flag_id=<flag_id>
```

**Edit Flag (View):**
```
GET edit_flag_id=<flag_id>
```

---

## 🎨 UI Features

### Dashboard Navigation
- Changed sidebar "Academy" to "**Manage Flags**"
- Updated icon from `science` to `flag`

### Flag Management Form
- **Flag Value Input**: Text field for the flag (e.g., `FLAG{something}`)
- **Level Selector**: Dropdown with three options:
  - 1️⃣ Easy
  - 2️⃣ Medium
  - 3️⃣ Hard
- **Hint Textarea**: Large text area for flag hints
- **Dynamic Button**: Shows "Add Flag" or "Update Flag" depending on mode
- **Cancel Button**: Appears when editing, allows canceling edit mode

### Flags Table
Displays all flags with columns:
- **Flag ID**: Auto-increment ID
- **Flag Value**: The flag string
- **Level**: Color-coded badge (Green=Easy, Yellow=Medium, Red=Hard)
- **Hint**: Preview of the hint (first 50 characters)
- **Actions**: Edit and Delete buttons

### Success/Error Messages
- Success alerts displayed after add/edit/delete operations
- Error alerts shown for validation failures
- Messages redirect back to #academy-section

---

## 📊 Database Structure

### flags Table Columns
```sql
CREATE TABLE `flags` (
  `flag_id` int NOT NULL AUTO_INCREMENT,
  `flag_value` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `hint` text,
  PRIMARY KEY (`flag_id`),
  UNIQUE KEY `flag_value` (`flag_value`)
);
```

### Level Values
- **1** = Easy
- **2** = Medium
- **3** = Hard

---

## 🔧 How to Use

### Adding a Flag
1. Navigate to Admin Panel → **Manage Flags**
2. Fill in the form:
   - **Flag Value**: `FLAG{sql_injection_found}`
   - **Level**: Select "2 - Medium"
   - **Hint**: `Try using a single quote in the input field`
3. Click **Add Flag**
4. Flag appears in the table below

### Editing a Flag
1. Click the **Edit** button next to a flag
2. Form updates with flag data and changes to "Update Flag" mode
3. Modify values as needed
4. Click **Update Flag**
5. Changes saved, table refreshes

### Deleting a Flag
1. Click the **Delete** button next to a flag
2. Confirm the deletion in the popup
3. Flag removed from database (including all user flag records)

---

## 🔐 Security Features

✅ **SQL Injection Protection**: Uses prepared statements
✅ **XSS Protection**: HTML escaping on all outputs
✅ **Input Validation**: Checks for required fields
✅ **CSRF Ready**: Form-based POST requests
✅ **Admin-Only Access**: Protected by `include/admin_auth.php`
✅ **Confirmation Dialogs**: Delete operations require confirmation

---

## 📝 Example Operations

### Add Easy Flag
```
Flag Value: FLAG{idor_user_123}
Level: 1 - Easy
Hint: Try changing the user ID in the URL to access other users' data
```

### Add Medium Flag
```
Flag Value: FLAG{xss_stored_attack}
Level: 2 - Medium
Hint: Input is stored in the database. Check the comments section.
```

### Add Hard Flag
```
Flag Value: FLAG{race_condition_exploit}
Level: 3 - Hard
Hint: Multiple requests to the same endpoint may cause unexpected behavior
```

---

## 🎯 Integration with Labs.php

The flags added here automatically integrate with:
- **Labs.php**: Users can submit flags they find
- **Ranking System**: Users earn points for finding flags
- **User Progress**: Tracks which flags each user has found
- **Level Filtering**: Labs.php displays flags grouped by level (1, 2, 3)

---

## 💡 Example CRUD Calls

```php
// Add flag
$crud->insertFlag('FLAG{test}', 1, 'This is a test flag');

// Get flag by ID
$flag = $crud->getFlagById(5);

// Get all flags
$allFlags = $crud->getAllFlags();

// Get flags by level
$easyFlags = $crud->getFlagsByLevel(1);
$mediumFlags = $crud->getFlagsByLevel(2);
$hardFlags = $crud->getFlagsByLevel(3);

// Update flag
$crud->updateFlag(5, 'FLAG{updated_test}', 2, 'Updated hint');

// Delete flag
$crud->deleteFlag(5);

// Get total flags
$total = $crud->getTotalFlags();
```

---

## ✨ Features Summary

| Feature | Status | Details |
|---------|--------|---------|
| Add Flags | ✅ | Create flags with value, level, and hint |
| Edit Flags | ✅ | Modify existing flag details |
| Delete Flags | ✅ | Remove flags (cascades to user_flags) |
| View All Flags | ✅ | Table with sorting by level |
| Level Selection | ✅ | Dropdown with 1=Easy, 2=Medium, 3=Hard |
| Hint Management | ✅ | Add/edit hints for each flag |
| CRUD Backend | ✅ | Full database operations via crud.php |
| Input Validation | ✅ | Required fields validation |
| Error Handling | ✅ | Displays errors and success messages |
| Admin Protection | ✅ | Requires admin authentication |

---

## 🚀 Next Steps (Optional)

1. Add flag search/filter functionality
2. Add bulk operations (edit multiple at once)
3. Add flag categories/tags
4. Add flag difficulty descriptions
5. Export/import flags functionality
6. View which users found each flag
7. Statistics dashboard for flag analytics

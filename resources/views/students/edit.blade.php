<html>

<head>
    <title>Edit Student</title>
</head>

<body>

    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Student ID</label>
        <input type="text" name="student_id"
               value="{{ old('student_id', $student->student_id) }}" required>

        <label>Student Name</label>
        <input type="text" name="name"
               value="{{ old('name', $student->name) }}" required>

        <label>Address</label>
        <input type="text" name="address"
               value="{{ old('address', $student->address) }}">

        <button type="submit">
            Update Student
        </button>

    </form>

</body>

</html>
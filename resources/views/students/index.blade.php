<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Student List</h1>

    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student->student_id }} , {{ $student->name }}

                <a href="{{ route('students.edit', $student) }}">
                    Edit
                </a>

                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Are you sure you want to delete this student?')">
                        Delete
                    </button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>
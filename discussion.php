<?php
// This code assumes that the user is logged in and has submitted a post or comment through a form.

// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user's input from the form
$user_id = $_SESSION['user_id']; // The user's ID (assuming it's stored in a session variable)
$post_text = $_POST['post_text']; // The text of the user's post or comment
$parent_id = $_POST['parent_id']; // The ID of the parent post (if the user is commenting on a post)

// Insert the post or comment into the database
if (empty($parent_id)) {
    // The user is creating a new post
    $sql = "INSERT INTO posts (user_id, post_text) VALUES ('$user_id', '$post_text')";
} else {
    // The user is commenting on an existing post
    $sql = "INSERT INTO comments (user_id, post_id, comment_text) VALUES ('$user_id', '$parent_id', '$post_text')";
}

if ($conn->query($sql) === TRUE) {
    // The post or comment was successfully inserted into the database
    header("Location: discussion_forum.php"); // Redirect the user back to the discussion forum
    exit();
} else {
    // There was an error inserting the post or comment into the database
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

// Award badges to the user
$badges = array();
$posts_count = $conn->query("SELECT COUNT(*) FROM posts WHERE user_id='$user_id'")->fetch_row()[0];
if ($posts_count >= 5) {
    // The user has posted at least 5 times
    $badges[] = "Frequent Poster";
}
if ($posts_count >= 25) {
    // The user has posted at least 25 times
    $badges[] = "Super Poster";
}
if (count($badges) > 0) {
    // The user has earned new badges
    $badges_str = implode(", ", $badges);
    echo "<p>Congratulations, you've earned the following badges: $badges_str!</p>";
}

// Generate a leaderboard
$leaderboard = array();
$result = $conn->query("SELECT user_id, points FROM users ORDER BY points DESC LIMIT 10");
while ($row = $result->fetch_assoc()) {
    $user_name = $conn->query("SELECT user_name FROM users WHERE user_id='" . $row['user_id'] . "'")->fetch_assoc()['user_name'];
    $leaderboard[] = array(
        "user_name" => $user_name,
        "points" => $row['points']
    );
}
if (count($leaderboard) > 0) {
    // Display the leaderboard
    echo "<h2>Leaderboard</h2>";
    echo "<ol>";
    foreach ($leaderboard as $rank => $entry) {
        echo "<li>" . $entry['user_name'] . " - " . $entry['points'] . " points</li>";
    }
    echo "</ol>";
}

// Check if the user has earned a reward
$reward = "";
$points = $conn->query("SELECT points FROM users WHERE user_id='$user_id'")->fetch_assoc()['points'];
if ($points >= 50) {
    // The user has earned a reward for reaching 50 points
    $reward = "Free e-book";
} else if ($points >= 100) {
    // The user has earned a reward for reaching 100 points
    $reward = "One-month subscription";
}
if ($reward != "") {
    // Display the reward to the user
    echo "<p>Congratulations, you've earned a reward: $reward!</p>";
}

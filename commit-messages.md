Good commit messages serve at least three important purposes:

* To speed up the reviewing process.

* To help us write a good release note.

* To help the future maintainers of Erlang/OTP (it could be you!), say five years into the future, to find out why a particular change was made to the code or why a specific feature was added.

Structure your commit message like this:

From: [[http://git-scm.com/book/ch5-2.html]]

> ```
> Short (50 chars or less) summary of changes
> 
> More detailed explanatory text, if necessary.  Wrap it to about 72
> characters or so.  In some contexts, the first line is treated as the
> subject of an email and the rest of the text as the body.  The blank
> line separating the summary from the body is critical (unless you omit
> the body entirely); tools like rebase can get confused if you run the
> two together.
> 
> Further paragraphs come after blank lines.
> 
>   - Bullet points are okay, too
> 
>   - Typically a hyphen or asterisk is used for the bullet, preceded by a
>     single space, with blank lines in between, but conventions vary here
> ```

DO
--
* Write the summary line and description of what you have done in the imperative mode, that is as if you were commanding someone. Start the line with "Fix", "Add", "Change" instead of "Fixed", "Added", "Changed".
* Always leave the second line blank.
* Line break the commit message (to make the commit message readable without having to scroll horizontally in `gitk`).

DON'T
-----
* Don't end the summary line with a period - it's a title and titles don't end with a period.

Tips
----
* If it seems difficult to summarize what your commit does, it may be because it includes several logical changes or bug fixes, and are better split up into several commits using `git add -p`.

References
----------
The following blog post has a nice discussion of commit messages:

"On commit messages":http://who-t.blogspot.com/2009/12/on-commit-messages.html

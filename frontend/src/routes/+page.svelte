<h1>Welcome to SvelteKit</h1>
<p>Visit <a href="https://kit.svelte.dev">kit.svelte.dev</a> to read the documentation</p>
<script>
    import { onMount } from 'svelte';
    let users = [];
  
    onMount(async () => {
      const response = await fetch('http://localhost:8080/api/users');
      if (response.ok) {
        users = await response.json();
      } else {
        console.error('Failed to fetch');
      }
    });
  </script>
  
  <ul>
    {#each users as user}
      <li>{user.name}</li>
    {/each}
  </ul>

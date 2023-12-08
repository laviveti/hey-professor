<div class="col-span-2">
  <ul>
    @foreach ($this->users as $user)
      <li class="mb-3">
        <code class="bg-red-700 p-1">{{ $user->name }}</code> |
        <code class="bg-red-700 p-1">{{ $user->email }}</code>
      </li>
    @endforeach
  </ul>

  {{ $this->users->links() }}
</div>

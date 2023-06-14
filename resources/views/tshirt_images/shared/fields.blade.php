<div class="mb-3">
    <label for="customer_id" class="form-label">Cliente id:</label>
    <input type="text" class="form-control" id="customer_id" name="customer_id" @unless(Auth::user()->isAdmin()) disabled @endunless>
</div>

<div class="mb-3">
    <label for="category_id" class="form-label">Categoria:</label>
    <select class="form-select" id="category_id" name="category_id" @if(Auth::user()->isAdmin()) disabled @endif>
        <option value="">Nenhuma</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="name" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="name" name="name" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Descrição:</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>

<div class="mb-3">
    <label for="image_url" class="form-label">URL da Imagem:</label>
</div>

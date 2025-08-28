function Link(el)
  if string.find(el.target, "^https?://") == nil then
    el.target = string.gsub(el.target, "%.md", ".html")
  end
  el.target = string.gsub(el.target, "%.rawmd", ".md")
  return el
end

function Image(el)
  el.src = string.gsub(el.src, "../assets", "assets")
  return el
end

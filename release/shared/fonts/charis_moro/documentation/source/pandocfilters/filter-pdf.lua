function Link(el)
  if string.find(el.target, "^https?://") == nil then
    -- While full external links work fine, WeasyPrint doesn't 
    -- seem capable of creating relative links within PDF files, 
    -- and thus the resulting PDF files won't work if they are 
    -- downloaded to a different folder. Until WeasyPrint is fixed,
    -- we remove the target from relative links, making them 
    -- nonfunctioning (even though they remain formatted as a link):
    el.target = ""
  end
  return el
end

function Image(el)
  el.src = string.gsub(el.src, "../assets", "../../assets")
  return el
end
